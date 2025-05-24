@extends('layouts.app')

@section('title', 'Terms of Service - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'Terms of Service']
        ]"
    />

    <!-- Main Content Container -->
    <div class="max-w-4xl mx-auto px-6 py-16">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-h1 font-bold text-the-end-900 mb-4">Terms of Service</h1>
            <p class="text-body-lg text-the-end-600">Effective Date: February 5, 2025</p>
        </div>

        <!-- Content Sections -->
        <div class="prose prose-lg max-w-none">
            <!-- Introduction Section -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Introduction & Acceptance of Terms
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    Welcome to Festa Design Studio. These Terms of Service ("Terms") govern your use of our website 
                    www.festa.design and our design services. By accessing our website or engaging our services, 
                    you agree to be bound by these Terms and our Privacy Policy.
                </p>
                
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    Festa Design Studio is a creative design agency specializing in working with nonprofits, social impact 
                    organizations, and purpose-driven startups. We provide comprehensive design services including visual 
                    identity, communication design, campaign development, and digital solutions that amplify social good.
                </p>

                <div class="bg-white-smoke-300 p-6 rounded-lg border-l-4 border-chicken-comb">
                    <p class="text-body text-the-end-700">
                        <strong>Important:</strong> Please read these Terms carefully before using our services. 
                        If you do not agree to these Terms, please do not use our website or engage our services. 
                        For questions, contact us at 
                        <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">hello@festa.design</a> 
                        or <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">+1-240-788-0787</a>.
                    </p>
                </div>
            </section>

            <!-- Services Overview -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Our Services
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    Festa Design Studio provides a range of creative and strategic design services tailored to organizations 
                    working toward positive social impact. Our services are designed to help you communicate your mission 
                    effectively and engage your audience meaningfully.
                </p>

                <h3 class="text-h3 font-medium text-the-end-800 mb-4">Design Services We Offer:</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Visual Identity Design</h4>
                        <p class="text-body-sm text-the-end-600">Logo design, brand guidelines, and visual systems</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Campaign Design</h4>
                        <p class="text-body-sm text-the-end-600">Social impact campaigns and advocacy materials</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Communication Design</h4>
                        <p class="text-body-sm text-the-end-600">Marketing materials, presentations, and publications</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Digital Solutions</h4>
                        <p class="text-body-sm text-the-end-600">Website design, digital tools, and online experiences</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Strategic Consulting</h4>
                        <p class="text-body-sm text-the-end-600">Design strategy and brand positioning guidance</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Design Tools</h4>
                        <p class="text-body-sm text-the-end-600">Custom software and toolkit development</p>
                    </div>
                </div>

                <p class="text-body text-the-end-700 leading-relaxed">
                    All services are provided subject to the terms outlined in this agreement and any additional 
                    project-specific contracts or statements of work that may be executed between Festa Design Studio and the client.
                </p>
            </section>

            <!-- Client Responsibilities -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Client Responsibilities
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    To ensure successful project delivery and maintain a productive working relationship, 
                    clients agree to the following responsibilities:
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="space-y-4">
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Timely Communication</h4>
                            <p class="text-body-sm text-the-end-600">Respond promptly to requests for information, feedback, and approvals to maintain project timelines.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Accurate Information</h4>
                            <p class="text-body-sm text-the-end-600">Provide complete, accurate, and current information necessary for project completion.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Content Provision</h4>
                            <p class="text-body-sm text-the-end-600">Supply all required content, materials, and assets in the agreed-upon formats and timeframes.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Legal Compliance</h4>
                            <p class="text-body-sm text-the-end-600">Ensure all provided content complies with applicable laws and regulations.</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Payment Terms</h4>
                            <p class="text-body-sm text-the-end-600">Make payments according to the agreed schedule and terms outlined in project contracts.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Feedback & Approvals</h4>
                            <p class="text-body-sm text-the-end-600">Provide constructive feedback and final approvals within specified review periods.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Rights & Permissions</h4>
                            <p class="text-body-sm text-the-end-600">Obtain all necessary rights, licenses, and permissions for any third-party content or materials.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Project Scope</h4>
                            <p class="text-body-sm text-the-end-600">Respect agreed project scope and communicate any desired changes through proper channels.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Intellectual Property Rights -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Intellectual Property Rights
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    Intellectual property rights are fundamental to our creative work. The following terms govern the 
                    ownership and usage of creative works, content, and materials throughout our engagement.
                </p>

                <div class="mb-8">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Festa Design Studio Rights</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">All creative concepts, designs, methodologies, and intellectual property developed by Festa Design Studio remain our exclusive property until full payment is received.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">We retain the right to use completed work for portfolio purposes, case studies, and marketing materials unless otherwise agreed in writing.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Our design processes, templates, and proprietary tools remain our intellectual property regardless of project outcomes.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Client Rights</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Upon full payment, clients receive usage rights to final deliverables for their intended organizational purposes.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Clients retain ownership of their original content, materials, and pre-existing intellectual property.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Transfer of rights is limited to the specific uses outlined in the project agreement and does not include resale or redistribution rights.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Third-Party Materials</h3>
                    <p class="text-body text-the-end-700">
                        When third-party materials (stock photography, fonts, software, etc.) are used in projects, 
                        clients are responsible for obtaining proper licenses for their intended use. Festa Design Studio 
                        will clearly identify any third-party materials and their licensing requirements.
                    </p>
                </div>
            </section>

            <!-- Payment Terms -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Payment Terms & Billing
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    Clear payment terms ensure smooth project delivery and maintain positive working relationships. 
                    All financial arrangements are outlined in individual project contracts with specific payment schedules.
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Payment Schedule</h3>
                        <ul class="space-y-2">
                            <li class="text-body-sm text-the-end-700">• Project deposits are typically 50% of total project cost</li>
                            <li class="text-body-sm text-the-end-700">• Milestone payments as outlined in project contracts</li>
                            <li class="text-body-sm text-the-end-700">• Final payment due upon project completion</li>
                            <li class="text-body-sm text-the-end-700">• Invoice payment terms: Net 30 days</li>
                        </ul>
                    </div>
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Late Payments</h3>
                        <ul class="space-y-2">
                            <li class="text-body-sm text-the-end-700">• Late fee: 1.5% per month on overdue amounts</li>
                            <li class="text-body-sm text-the-end-700">• Work may be suspended for accounts over 30 days past due</li>
                            <li class="text-body-sm text-the-end-700">• Collections costs may be added to outstanding balances</li>
                            <li class="text-body-sm text-the-end-700">• Rights transfer suspended until full payment received</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg border-l-4 border-chicken-comb">
                    <h3 class="text-h4 font-medium text-the-end-800 mb-4">Scope Changes & Additional Work</h3>
                    <p class="text-body text-the-end-700 mb-4">
                        Changes to agreed project scope will be documented and may result in additional charges. 
                        We believe in transparency and will always discuss scope changes and associated costs before proceeding.
                    </p>
                    <p class="text-body text-the-end-700">
                        <strong>Revision Policy:</strong> Projects typically include a specified number of revision rounds. 
                        Additional revisions beyond the agreed scope will be billed at our standard hourly rate.
                    </p>
                </div>
            </section>

            <!-- Project Delivery & Timelines -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Project Delivery & Timelines
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    We are committed to delivering high-quality work within agreed timelines. Project schedules are 
                    established collaboratively and depend on various factors including project complexity, client 
                    responsiveness, and resource availability.
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <h3 class="text-h3 font-medium text-the-end-800 mb-4">Timeline Factors</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Project scope and complexity</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Client feedback and approval speed</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Content and material provision</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Team availability and workload</p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-h3 font-medium text-the-end-800 mb-4">Delivery Methods</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Digital files via secure online platforms</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Cloud-based project folders and assets</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Print-ready files with production specifications</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                                <p class="text-body text-the-end-700">Brand guidelines and usage documentation</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Force Majeure</h3>
                    <p class="text-body text-the-end-700">
                        Festa Design Studio shall not be liable for delays or failures in performance due to circumstances 
                        beyond our reasonable control, including but not limited to acts of God, natural disasters, 
                        government actions, pandemics, or other unforeseeable events. We will communicate any such delays 
                        promptly and work to minimize their impact on project timelines.
                    </p>
                </div>
            </section>

            <!-- Limitation of Liability -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Limitation of Liability & Warranties
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    While we strive for excellence in all our work, it's important to establish clear expectations 
                    regarding liability and warranties for our creative services.
                </p>

                <div class="mb-8">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Service Warranties</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">We warrant that our work will be performed in a professional manner consistent with industry standards.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Original designs will be free from plagiarism and will not knowingly infringe on third-party rights.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">We will correct any errors or defects in our work at no additional cost when brought to our attention within 30 days of delivery.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg border-l-4 border-chicken-comb mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Limitation of Liability</h3>
                    <p class="text-body text-the-end-700 mb-4">
                        <strong>EXCEPT AS EXPRESSLY SET FORTH ABOVE, FESTA DESIGN STUDIO DISCLAIMS ALL WARRANTIES, 
                        EXPRESS OR IMPLIED, INCLUDING WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.</strong>
                    </p>
                    <p class="text-body text-the-end-700">
                        Our total liability for any claim arising from our services shall not exceed the total amount 
                        paid by the client for the specific project giving rise to the claim. We shall not be liable 
                        for any indirect, incidental, consequential, or punitive damages.
                    </p>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Client Indemnification</h3>
                    <p class="text-body text-the-end-700">
                        Client agrees to indemnify and hold Festa Design Studio harmless from any claims, damages, 
                        or expenses arising from: (1) use of the work outside the agreed scope, (2) modifications 
                        made by parties other than Festa Design Studio, (3) client-provided content or materials, 
                        or (4) failure to obtain proper licenses for third-party materials.
                    </p>
                </div>
            </section>

            <!-- Termination & Cancellation -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Termination & Cancellation
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    While we aim for successful project completion, we understand that circumstances may require 
                    project termination. These terms govern the termination process and associated responsibilities.
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Client-Initiated Termination</h3>
                        <ul class="space-y-3">
                            <li class="text-body-sm text-the-end-700">• 30-day written notice required for termination</li>
                            <li class="text-body-sm text-the-end-700">• Payment due for all work completed to termination date</li>
                            <li class="text-body-sm text-the-end-700">• Client receives work completed through termination date</li>
                            <li class="text-body-sm text-the-end-700">• Kill fee may apply based on project stage</li>
                        </ul>
                    </div>
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Festa-Initiated Termination</h3>
                        <ul class="space-y-3">
                            <li class="text-body-sm text-the-end-700">• May terminate for non-payment after 30 days past due</li>
                            <li class="text-body-sm text-the-end-700">• May terminate for breach of contract terms</li>
                            <li class="text-body-sm text-the-end-700">• 15-day written notice provided when possible</li>
                            <li class="text-body-sm text-the-end-700">• Client billed for completed work only</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg border-l-4 border-pepper-green">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Post-Termination</h3>
                    <p class="text-body text-the-end-700 mb-4">
                        Upon termination, both parties' obligations cease except for: payment of outstanding amounts, 
                        return of confidential materials, and respect for intellectual property rights established prior to termination.
                    </p>
                    <p class="text-body text-the-end-700">
                        <strong>Work in Progress:</strong> Clients receive rights only to work that has been fully paid for. 
                        Incomplete work remains property of Festa Design Studio until final payment arrangements are resolved.
                    </p>
                </div>
            </section>

            <!-- Website Terms -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Website Usage Terms
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    These terms govern your use of the Festa Design Studio website (www.festa.design) and any 
                    related digital platforms or tools we may provide.
                </p>

                <div class="mb-8">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Acceptable Use</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Use our website for legitimate business purposes and in compliance with all applicable laws.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Respect our intellectual property rights and do not copy, reproduce, or distribute our content without permission.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Do not attempt to gain unauthorized access to any part of our website or systems.</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Prohibited Activities</h3>
                        <ul class="space-y-2">
                            <li class="text-body-sm text-the-end-700">• Uploading malicious code or viruses</li>
                            <li class="text-body-sm text-the-end-700">• Attempting to reverse engineer our tools</li>
                            <li class="text-body-sm text-the-end-700">• Using automated systems to access our site</li>
                            <li class="text-body-sm text-the-end-700">• Interfering with website functionality</li>
                        </ul>
                    </div>
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">User Content</h3>
                        <p class="text-body-sm text-the-end-700">
                            Any content you submit through our website (contact forms, project briefs, etc.) 
                            becomes part of our business communications. You represent that you have the right 
                            to submit such content and grant us permission to use it for business purposes.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Governing Law -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Governing Law & Dispute Resolution
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    These Terms of Service and any disputes arising from our relationship shall be governed by 
                    Canadian federal law and the laws of the province where Festa Design Studio is located.
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Dispute Resolution Process</h3>
                        <ol class="space-y-3 text-body-sm text-the-end-700">
                            <li><strong>1. Direct Communication:</strong> Attempt to resolve disputes through direct discussion</li>
                            <li><strong>2. Mediation:</strong> If direct resolution fails, engage a neutral mediator</li>
                            <li><strong>3. Arbitration:</strong> Binding arbitration if mediation is unsuccessful</li>
                            <li><strong>4. Court Action:</strong> Legal proceedings as a last resort</li>
                        </ol>
                    </div>
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Jurisdiction</h3>
                        <p class="text-body text-the-end-700 mb-4">
                            Any legal proceedings shall take place in the courts of competent jurisdiction 
                            where Festa Design Studio's principal place of business is located.
                        </p>
                        <p class="text-body-sm text-the-end-600">
                            <strong>Limitation Period:</strong> Any claims must be brought within one (1) year 
                            of the date the cause of action arose.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Updates & Modifications -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Terms Updates & Modifications
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    We may update these Terms of Service from time to time to reflect changes in our services, 
                    legal requirements, or business practices. We are committed to maintaining transparency about any changes.
                </p>

                <div class="bg-white-smoke-300 p-6 rounded-lg border-l-4 border-chicken-comb mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Notification of Changes</h3>
                    <p class="text-body text-the-end-700 mb-4">
                        Significant changes to these Terms will be communicated through email notification to our 
                        active clients and prominent posting on our website. The effective date of any changes will 
                        be clearly indicated at the top of this document.
                    </p>
                    <p class="text-body text-the-end-700">
                        Continued use of our services after changes take effect constitutes acceptance of the modified Terms. 
                        If you disagree with any changes, please discontinue use of our services and contact us to discuss 
                        existing project obligations.
                    </p>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Severability</h3>
                    <p class="text-body text-the-end-700">
                        If any provision of these Terms is found to be unenforceable or invalid, the remaining provisions 
                        will continue in full force and effect. The invalid provision will be replaced with a valid 
                        provision that most closely reflects the intent of the original provision.
                    </p>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="mb-16">
                <div class="bg-chicken-comb-50 p-8 rounded-lg border border-chicken-comb-200">
                    <h2 class="text-h2 font-semibold text-pepper-green mb-4">Questions About These Terms?</h2>
                    <p class="text-body text-the-end-700 mb-6">
                        If you have any questions about these Terms of Service or need clarification about any aspect 
                        of our working relationship, please don't hesitate to contact us. We're here to ensure a clear 
                        understanding and successful collaboration.
                    </p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-h5 font-medium text-the-end-800 mb-2">Email</h3>
                            <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium text-body-lg">hello@festa.design</a>
                        </div>
                        <div>
                            <h3 class="text-h5 font-medium text-the-end-800 mb-2">Phone</h3>
                            <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium text-body-lg">+1-240-788-0787</a>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-chicken-comb-200">
                        <p class="text-body-sm text-the-end-600">
                            <strong>Last Updated:</strong> February 5, 2025<br>
                            These Terms of Service are effective immediately and apply to all current and future projects with Festa Design Studio.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection 