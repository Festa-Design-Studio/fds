<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display newsletter subscribers
     */
    public function index()
    {
        try {
            // Get list members from Mailchimp
            $members = Newsletter::getMembers();
            
            return view('admin.newsletter.index', compact('members'));
            
        } catch (\Exception $e) {
            Log::error('Failed to fetch newsletter subscribers', [
                'error' => $e->getMessage()
            ]);
            
            return view('admin.newsletter.index', [
                'members' => [],
                'error' => 'Failed to fetch subscribers: ' . $e->getMessage()
            ]);
        }
    }
    
    /**
     * Show newsletter statistics
     */
    public function stats()
    {
        try {
            // Get basic list stats
            $stats = [
                'total_subscribers' => Newsletter::getMemberCount(),
                'api_connected' => true,
                'list_id' => config('newsletter.lists.subscribers.id'),
                'last_updated' => now()
            ];
            
            return view('admin.newsletter.stats', compact('stats'));
            
        } catch (\Exception $e) {
            Log::error('Failed to fetch newsletter stats', [
                'error' => $e->getMessage()
            ]);
            
            $stats = [
                'total_subscribers' => 0,
                'api_connected' => false,
                'error' => $e->getMessage(),
                'last_updated' => now()
            ];
            
            return view('admin.newsletter.stats', compact('stats'));
        }
    }
}