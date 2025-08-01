<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscriptionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Subscribe user to newsletter
     */
    public function subscribe(NewsletterSubscriptionRequest $request): RedirectResponse
    {
        $email = $request->validated()['email'];

        try {
            // Check if user is already subscribed
            if (Newsletter::isSubscribed($email)) {
                return redirect(url()->previous() . '#newsletter')->with('newsletter_info', '✨ You\'re already subscribed to our newsletter!');
            }

            // Subscribe user to the newsletter
            Newsletter::subscribe($email);

            Log::info('Newsletter subscription successful', ['email' => $email]);

            return redirect(url()->previous() . '#newsletter')->with('newsletter_success', '🎉 Thanks for subscribing! You\'ll receive our latest updates soon.');

        } catch (\Exception $e) {
            Log::error('Newsletter subscription failed', [
                'email' => $email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            // Handle different types of errors
            $errorMessage = 'Sorry, something went wrong. Please try again later.';
            
            if (str_contains($e->getMessage(), 'already a list member')) {
                $errorMessage = '✨ You\'re already subscribed to our newsletter!';
                return redirect(url()->previous() . '#newsletter')->with('newsletter_info', $errorMessage);
            }

            if (str_contains($e->getMessage(), 'Invalid email address')) {
                $errorMessage = 'Please enter a valid email address.';
            }

            return redirect(url()->previous() . '#newsletter')->with('newsletter_error', $errorMessage);
        }
    }

    /**
     * Unsubscribe user from newsletter (optional feature)
     */
    public function unsubscribe(NewsletterSubscriptionRequest $request): RedirectResponse
    {
        $email = $request->validated()['email'];

        try {
            Newsletter::unsubscribe($email);
            
            Log::info('Newsletter unsubscription successful', ['email' => $email]);

            return redirect(url()->previous() . '#newsletter')->with('newsletter_success', 'You have been successfully unsubscribed from our newsletter.');

        } catch (\Exception $e) {
            Log::error('Newsletter unsubscription failed', [
                'email' => $email,
                'error' => $e->getMessage()
            ]);

            return redirect(url()->previous() . '#newsletter')->with('newsletter_error', 'Sorry, something went wrong. Please try again later.');
        }
    }
}