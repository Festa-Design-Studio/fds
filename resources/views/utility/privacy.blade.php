@extends('layouts.app')

@section('title', 'Privacy Policy - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'Privacy Policy']
        ]"
    />

    <!-- Main Content Container -->
    <div class="max-w-4xl mx-auto px-6 py-16">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-h1 font-bold text-the-end-900 mb-4">Privacy Policy</h1>
            <p class="text-body-lg text-the-end-600">Effective Date: February 5, 2025</p>
        </div>

        <!-- Content Sections -->
        <div class="prose prose-lg max-w-none">
            <!-- Introduction Section -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Introduction & Organizational Info
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    We, at Festa Design Studio, are dedicated to serving our customers and contacts to the best of our
                    abilities. Part of our commitment involves the responsible management of personal information collected through
                    our website www.festa.design, and any related interactions. Our primary goals in processing
                    this information include:
                </p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                        <p class="text-body text-the-end-700">Enhancing the user experience on our platform by understanding customer needs and preferences.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                        <p class="text-body text-the-end-700">Providing timely support and responding to inquiries or service requests.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                        <p class="text-body text-the-end-700">Improving our products and services to meet the evolving demands of our users.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                        <p class="text-body text-the-end-700">Conducting necessary business operations, such as billing and account management.</p>
                    </li>
                </ul>

                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    It is our policy to process personal information with the utmost respect for privacy and security. We adhere to
                    all relevant regulations and guidelines to ensure that the data we handle is protected against unauthorized
                    access, disclosure, alteration, and destruction. Our practices are designed to safeguard the confidentiality and
                    integrity of your personal information, while enabling us to deliver the services you trust us with.
                </p>

                <div class="bg-white-smoke-300 p-6 rounded-lg border-l-4 border-chicken-comb">
                    <p class="text-body text-the-end-700">
                        We do not have a designated Data Protection Officer (DPO) but remain fully committed to addressing your privacy concerns. 
                        Should you have any questions, please contact us at 
                        <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">hello@festa.design</a> 
                        or <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">+1-240-788-0787</a>. 
                    </p>
                </div>

                <p class="text-body text-the-end-700 mt-6 leading-relaxed">
                    Your privacy is our priority. We are committed to processing your personal information transparently and with
                    your safety in mind. This commitment extends to our collaboration with third-party services that may process
                    personal information on our behalf, such as in the case of sending invoices. Rest assured, all activities are
                    conducted in strict compliance with applicable privacy laws.
                </p>
            </section>

            <!-- Scope and Application -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Scope and Application
                </h2>
                <p class="text-body text-the-end-700 leading-relaxed">
                    Our privacy policy is designed to protect the personal information of all our stakeholders, including website
                    visitors, registered users, and customers. Whether you are just browsing our website www.festa.design, 
                    using our services as a registered user, or engaging with us as a valued customer, we ensure that your 
                    personal data is processed with the highest standards of privacy and security. This policy outlines our 
                    practices and your rights related to personal information.
                </p>
            </section>

            <!-- Data Collection and Processing -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Data Collection and Processing
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    Our commitment to transparency and data protection extends to how we collect and use your personal information.
                    We gather personal data through various interactions, including when you utilize our services such as 
                    nonprofit and social impact-driven startup project design, communication design and campaign design. Festa 
                    create design tools and softwares, or directly provide information to us.
                </p>

                <h3 class="text-h3 font-medium text-the-end-800 mb-4">Types of Personal Information We Process:</h3>
                <div class="grid md:grid-cols-2 gap-4 mb-8">
                    <div class="bg-white-smoke-300 p-4 rounded-lg">
                        <h4 class="text-h5 font-medium text-the-end-800 mb-2">Contact Information</h4>
                        <p class="text-body-sm text-the-end-600">First and Last Name</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 rounded-lg">
                        <h4 class="text-h5 font-medium text-the-end-800 mb-2">Communication Details</h4>
                        <p class="text-body-sm text-the-end-600">Email address and/or Phone number</p>
                    </div>
                </div>

                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    Please note, that we only process information that is essential for delivering our services, complying with legal
                    obligations, or enhancing your user experience. Your privacy is paramount, and we are dedicated to handling your
                    personal information responsibly and in accordance with all applicable laws.
                </p>

                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    At Festa Design Studio, we believe in using personal information responsibly and ethically. The
                    data we collect serves multiple purposes, all aimed at enhancing the services we offer and ensuring the highest
                    level of satisfaction among our users, customers, and employees. Here are the key ways in which we use the
                    personal information collected:
                </p>

                <h3 class="text-h3 font-medium text-the-end-800 mb-4">How We Use Your Information:</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Content Delivery</h4>
                        <p class="text-body-sm text-the-end-600">Providing requested services and content</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Marketing & Advertising</h4>
                        <p class="text-body-sm text-the-end-600">Relevant communications about our services</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Displaying Videos</h4>
                        <p class="text-body-sm text-the-end-600">Multimedia content presentation</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">Customer Support</h4>
                        <p class="text-body-sm text-the-end-600">Responding to inquiries and providing assistance</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">User Engagement</h4>
                        <p class="text-body-sm text-the-end-600">Improving user experience and retention</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg hover:shadow-md transition-shadow">
                        <h4 class="text-h6 font-medium text-the-end-800 mb-2">User Feedback</h4>
                        <p class="text-body-sm text-the-end-600">Collecting and analyzing satisfaction data</p>
                    </div>
                </div>

                <p class="text-body text-the-end-700 leading-relaxed">
                    Your privacy is our priority. We process your personal information transparently and in accordance with your
                    preferences and applicable privacy laws. We are committed to ensuring that your data is used solely for the
                    purposes for which it was collected and in ways that you have authorized.
                </p>
            </section>

            <!-- Data Storage and Protection -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Data Storage and Protection
                </h2>
                
                <div class="mb-8">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Data Storage</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Personal information is stored in secure servers with state-of-the-art security measures. For services that require international data transfer, we ensure that such transfers comply with all applicable laws and maintain data protection standards equivalent to those in our primary location.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Data Hosting Partners: We partner with reputable data hosting providers committed to using state-of-the-art security measures. These partners are selected based on their adherence to stringent data protection standards.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 border border-white-smoke-300 rounded-lg">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Data Protection Measures</h3>
                    <p class="text-body text-the-end-700">
                        <strong>Security Audits and Monitoring:</strong> Regular security audits are conducted to identify and remediate potential vulnerabilities. 
                        We also monitor our systems for unusual activities to prevent unauthorized access.
                    </p>
                </div>
            </section>

            <!-- Data Processing Agreements -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Data Processing Agreements
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    When we share your data with third-party service providers, we do so under the protection of Data Processing
                    Agreements (DPAs) that ensure your information is managed in accordance with GDPR and other relevant data
                    protection laws. These agreements mandate that third parties implement adequate technical and organizational
                    measures to ensure the security of your data.
                </p>

                <div class="mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Transparency and Control</h3>
                    <p class="text-body text-the-end-700 mb-4 leading-relaxed">
                        We believe in transparency and providing you with control over your personal information. You will always be
                        informed about any significant changes to our sharing practices, and where applicable, you will have the option
                        to consent to such changes.
                    </p>
                    <p class="text-body text-the-end-700 leading-relaxed">
                        Your trust is important to us, and we strive to ensure that your personal information is disclosed only in
                        accordance with this policy and when there is a justified reason to do so. For any queries or concerns about how
                        we share and disclose personal information, please reach out to us at 
                        <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">hello@festa.design</a> 
                        or <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">+1-240-788-0787</a>. 
                    </p>
                </div>
            </section>

            <!-- User Rights and Choices -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Your Rights and Choices
                </h2>
                <p class="text-body text-the-end-700 mb-8 leading-relaxed">
                    At Festa Design Studio, we recognize and respect your rights regarding your personal information, 
                    in accordance with the General Data Protection Regulation (GDPR) and other applicable data protection laws.
                    We are committed to ensuring you can exercise your rights effectively. Below is an overview of your rights and how
                    you can exercise them:
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="space-y-4">
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right of Access (Article 15 GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">You have the right to request access to the personal information we hold about you and to obtain information about how we process it.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right to Rectification (Article 16 GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">If you believe that any personal information we hold about you is incorrect or incomplete, you have the right to request its correction or completion.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right to Erasure ('Right to be Forgotten') (Article 17 GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">You have the right to request the deletion of your personal information when it is no longer necessary for the purposes for which it was collected, among other circumstances.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-chicken-comb rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right to Restriction of Processing (Article 18 GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">You have the right to request that we restrict the processing of your personal information under certain conditions.</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right to Data Portability (Article 20 GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">You have the right to receive your personal information in a structured, commonly used, and machine-readable format and to transmit those data to another controller.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right to Object (Article 21 GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">You have the right to object to the processing of your personal information, under certain conditions, including processing for direct marketing.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right to Withdraw Consent (Article 7(3) GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">Where the processing of your personal information is based on your consent, you have the right to withdraw that consent at any time without affecting the lawfulness of processing based on consent before its withdrawal.</p>
                        </div>
                        <div class="bg-white-smoke-300 p-4 border-l-4 border-pepper-green rounded-r-lg">
                            <h4 class="text-h5 font-medium text-the-end-800 mb-2">Right to Lodge a Complaint (Article 77 GDPR)</h4>
                            <p class="text-body-sm text-the-end-600">You have the right to lodge a complaint with a supervisory authority if you believe our processing of your personal information violates applicable data protection laws.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg">
                    <h3 class="text-h4 font-medium text-the-end-800 mb-4">Exercising Your Rights</h3>
                    <p class="text-body text-the-end-700 mb-4">
                        To exercise any of these rights, please contact us at 
                        <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">hello@festa.design</a> 
                        or <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">+1-240-788-0787</a>. 
                        We will respond to your request in accordance with applicable data protection laws and within the timeframes 
                        stipulated by those laws. Please note, in some cases, we may need to verify your identity as part of the process 
                        to ensure the security of your personal information.
                    </p>
                    <p class="text-body text-the-end-700">
                        We are committed to facilitating the exercise of your rights and to ensuring you have full control over your
                        personal information. If you have any questions or concerns about how your personal information is handled,
                        please do not hesitate to get in touch with us.
                    </p>
                </div>
            </section>

            <!-- Cookies Section -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Cookies and Tracking Technologies
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    At Festa Design Studio, we value your privacy and are committed to being transparent about our use
                    of cookies and other tracking technologies on our website www.festa.design. These
                    technologies play a crucial role in ensuring the smooth operation of our digital platforms, enhancing your user
                    experience, and providing insights that help us improve.
                </p>

                <div class="mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Understanding Cookies and Tracking Technologies</h3>
                    <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                        Cookies are small data files placed on your device that enable us to remember your preferences and collect
                        information about your website usage. Tracking technologies, such as web beacons and pixel tags, help us
                        understand how you interact with our site and which pages you visit.
                    </p>
                </div>

                <h3 class="text-h3 font-medium text-the-end-800 mb-4">How We Use These Technologies:</h3>
                <div class="space-y-4 mb-8">
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg">
                        <h4 class="text-h5 font-medium text-the-end-800 mb-2">Essential Cookies</h4>
                        <p class="text-body-sm text-the-end-600">Necessary for the website's functionality, such as authentication and security. They do not require consent.</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg">
                        <h4 class="text-h5 font-medium text-the-end-800 mb-2">Performance and Analytics Cookies</h4>
                        <p class="text-body-sm text-the-end-600">These collect information about how visitors use our website, which pages are visited most frequently, and if error messages are received from web pages. These cookies help us improve our website.</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg">
                        <h4 class="text-h5 font-medium text-the-end-800 mb-2">Functional Cookies</h4>
                        <p class="text-body-sm text-the-end-600">Enable the website to provide enhanced functionality and personalization, like remembering your preferences.</p>
                    </div>
                    <div class="bg-white-smoke-300 p-4 border border-white-smoke-300 rounded-lg">
                        <h4 class="text-h5 font-medium text-the-end-800 mb-2">Advertising and Targeting Cookies</h4>
                        <p class="text-body-sm text-the-end-600">Used to deliver advertisements more relevant to you and your interests. They are also used to limit the number of times you see an advertisement and help measure the effectiveness of the advertising campaign.</p>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Your Choices and Consent</h3>
                    <p class="text-body text-the-end-700 mb-4 leading-relaxed">
                        Upon your first visit, our website will present you with a cookie consent banner, where you can:
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Accept All Cookies: Consent to the use of all cookies and tracking technologies.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Reject Non-Essential Cookies: Only essential cookies will be used to provide you with necessary website functions.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <p class="text-body text-the-end-700">Customize Your Preferences: Choose which categories of cookies you wish to allow.</p>
                        </li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Changes to Our Cookie Use</h3>
                    <p class="text-body text-the-end-700 mb-4 leading-relaxed">
                        We may update our use of cookies and tracking technologies to improve our services or comply with legal
                        requirements. We will notify you of any significant changes and seek your consent where necessary.
                    </p>
                </div>

                <p class="text-body text-the-end-700 mb-4 leading-relaxed">
                    For more detailed information about the cookies we use, their purposes, and how you can manage your preferences,
                    please visit our detailed <a href="https://festa.design/cookie-policy" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">Cookie Policy</a>.
                </p>

                <p class="text-body text-the-end-700 leading-relaxed">
                    Should you have any questions or concerns about our use of cookies and tracking technologies, please do not
                    hesitate to contact us at <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">hello@festa.design</a> 
                    or <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">+1-240-788-0787</a>.
                    Your privacy and the integrity of your personal data are of utmost importance to us.
                </p>
            </section>

            <!-- Direct Marketing -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Direct Marketing and Communications
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    At Festa Design Studio, we may use your personal information to send you direct marketing
                    communications about our products, services, promotions, and other relevant information that we believe may be
                    of interest to you. We are committed to ensuring that our direct marketing practices are transparent, lawful,
                    and in compliance with applicable data protection laws, including the General Data Protection Regulation (GDPR)
                    and the ePrivacy Directive.
                </p>

                <div class="mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Obtaining Consent for Direct Marketing</h3>
                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <div>
                                <p class="text-body text-the-end-700 mb-2"><strong>Opt-In Consent:</strong> We will obtain your explicit opt-in consent before sending you direct marketing communications, where required by law. This means that you will have the opportunity to actively consent to receiving marketing messages from us before we send them to you.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <div>
                                <p class="text-body text-the-end-700"><strong>Unsubscribe Option:</strong> Every direct marketing communication we send will include clear instructions on how to unsubscribe or opt-out from receiving future marketing communications. You can exercise your right to opt-out at any time, and we will promptly honor your request to stop sending you marketing messages.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Types of Direct Marketing Communications</h3>
                        <p class="text-body text-the-end-700 mb-4">We may use your personal information to send you direct marketing communications via various channels, including:</p>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 bg-chicken-comb rounded-full mr-3"></span>
                                <span class="text-body text-the-end-700 font-medium">Email</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 bg-chicken-comb rounded-full mr-3"></span>
                                <span class="text-body text-the-end-700 font-medium">Social Media Platforms</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white-smoke-300 p-6 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Managing Your Preferences</h3>
                        <p class="text-body text-the-end-700">
                            You have control over the direct marketing communications you receive from us. You can manage your communication
                            preferences by using the unsubscribe link provided in our marketing emails or text messages.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Data Breach Notification -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Data Breach Notification Procedures
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    At Festa Design Studio, we understand the importance of protecting your personal information and
                    take proactive measures to safeguard it. In the event of a data breach that poses a risk to your privacy rights
                    and freedoms, we have established clear procedures for promptly identifying, assessing, and mitigating the
                    impact of the breach. Our data breach notification procedures are designed to comply with applicable data
                    protection laws and regulations, including the General Data Protection Regulation (GDPR).
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white-smoke-300 p-6 border border-white-smoke-300 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Detection and Assessment</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-3 flex-shrink-0"></span>
                                <p class="text-body-sm text-the-end-700"><strong>Internal Monitoring:</strong> We employ robust security measures and monitoring systems to detect and respond to potential data breaches promptly.</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-3 flex-shrink-0"></span>
                                <p class="text-body-sm text-the-end-700"><strong>Assessment of Breach Impact:</strong> Upon discovery of a data breach, we will conduct a thorough assessment to determine the nature and scope of the breach, including the types of personal information involved and the potential impact on affected individuals.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white-smoke-300 p-6 border border-white-smoke-300 rounded-lg">
                        <h3 class="text-h4 font-medium text-the-end-800 mb-4">Notification Obligations</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-3 flex-shrink-0"></span>
                                <p class="text-body-sm text-the-end-700"><strong>Regulatory Authorities:</strong> If required by law, we will notify the relevant data protection authorities of the data breach within the required timeframe, following the procedures specified by applicable regulations.</p>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-2 h-2 bg-chicken-comb rounded-full mt-3 mr-3 flex-shrink-0"></span>
                                <p class="text-body-sm text-the-end-700"><strong>Affected Individuals:</strong> If a data breach poses a significant risk to your privacy rights and freedoms, we will notify you within the required timeframe, providing clear and concise information about the breach, the types of personal information affected, and the steps you can take to protect yourself.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Communication Channels</h3>
                    <div class="bg-white-smoke-300 p-4 rounded-lg">
                        <p class="text-body text-the-end-700">
                            <strong>Email Notification:</strong> We may notify affected individuals via email, using the contact information provided to us, if feasible and appropriate.
                        </p>
                    </div>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Support and Assistance</h3>
                    <p class="text-body text-the-end-700 mb-4">
                        In the event of a data breach, we are committed to providing affected individuals with the support and assistance
                        they need, including guidance on steps they can take to mitigate the potential risks associated with the breach.
                    </p>
                    <p class="text-body text-the-end-700">
                        <strong>Point of Contact:</strong> If you have any questions or concerns about a data breach or believe you may have been
                        affected, please contact us immediately at <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">hello@festa.design</a> 
                        or <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">+1-240-788-0787</a>.
                    </p>
                </div>
            </section>

            <!-- Policy Updates -->
            <section class="mb-16">
                <h2 class="text-h2 font-semibold text-pepper-green mb-6 border-b-2 border-chicken-comb pb-3">
                    Policy Updates and Changes
                </h2>
                <p class="text-body text-the-end-700 mb-6 leading-relaxed">
                    At Festa Design Studio, we are committed to keeping you informed about how we handle your personal
                    information and any changes to our privacy practices. We may update this privacy policy from time to time to
                    reflect changes in legal requirements, industry standards, or our business operations. We want to assure you
                    that any updates will be communicated transparently and in accordance with applicable data protection laws.
                </p>

                <div class="mb-6">
                    <h3 class="text-h3 font-medium text-the-end-800 mb-4">Notification of Changes</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <div>
                                <p class="text-body text-the-end-700 mb-2"><strong>Notification Process:</strong> In the event of significant changes to our privacy policy that may affect your rights or the way we handle your personal information, we will provide notice through prominent means, such as email, website notifications, or other appropriate channels. We will also indicate the effective date of the updated policy at the top of the document.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-pepper-green rounded-full mt-3 mr-4 flex-shrink-0"></span>
                            <div>
                                <p class="text-body text-the-end-700"><strong>Reviewing Changes:</strong> We encourage you to review our privacy policy periodically to stay informed about how we collect, use, and protect your personal information. Your continued use of our services after any changes to the policy signifies your acceptance of the updated terms.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="bg-white-smoke-300 p-6 rounded-lg mb-6">
                    <h3 class="text-h4 font-medium text-the-end-800 mb-4">Opt-In Consent for Material Changes</h3>
                    <p class="text-body text-the-end-700">
                        For material changes to our privacy policy that require your consent under applicable data protection laws, such
                        as the General Data Protection Regulation (GDPR), we will seek your explicit opt-in consent before implementing
                        the changes. You will have the opportunity to review the updated policy and provide your consent before any
                        changes take effect.
                    </p>
                </div>

                <div class="bg-white-smoke-300 p-6 border border-white-smoke-300 rounded-lg">
                    <h3 class="text-h4 font-medium text-the-end-800 mb-4">Contact Us</h3>
                    <p class="text-body text-the-end-700">
                        If you have any questions or concerns about our privacy policy or any updates to it, please don't hesitate to
                        contact us at <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">hello@festa.design</a> 
                        or <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium">+1-240-788-0787</a>. 
                        We are here to address any inquiries you may have and to ensure that you have the information you need to feel confident about
                        how your personal information is handled.
                    </p>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="mb-16">
                <div class="bg-chicken-comb-50 p-8 rounded-lg border border-chicken-comb-200">
                    <h2 class="text-h2 font-semibold text-pepper-green mb-4">Contact Us</h2>
                    <p class="text-body text-the-end-700 mb-6">
                        If you have any questions or concerns about our privacy policy or how we handle your personal information, 
                        please don't hesitate to contact us:
                    </p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-h5 font-medium text-the-end-800 mb-2">Email</h3>
                            <a href="mailto:hello@festa.design" class="text-chicken-comb hover:text-chicken-comb-700 font-medium text-body-lg">hello@festa.design</a> 
                        </div>
                        <div>
                            <h3 class="text-h5 font-medium text-the-end-800 mb-2">Phone</h3>
                            <a href="tel:+12407880787" class="text-chicken-comb hover:text-chicken-comb-700 font-medium text-body-lg">+1-240-788-0787</a>.
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection 


                