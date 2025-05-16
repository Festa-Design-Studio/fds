@props([
    'access_key' => '',
])

<div class="bg-white-smoke-100 p-6 md:p-8 lg:p-10 rounded-lg border border-the-end-200 shadow-sm">
    <div class="mb-8">
        <h2 class="text-h2 font-bold text-chicken-comb-600 mb-4">Talk to Festa</h2>
        <p class="text-body text-the-end-700">
            We're excited to learn about your organization and how we can help you create impact through purpose-driven design.
        </p>
    </div>

    <form action="https://api.web3forms.com/submit" method="POST" class="space-y-8">
        <!-- Hidden Fields -->
        <input type="hidden" name="access_key" value="{{ $access_key }}">
        <input type="hidden" name="to" value="talktofesta@festa.design">
        <input type="hidden" name="redirect" value="{{ url('/thank-you') }}">
        <input type="hidden" name="subject" value="New TalktoFesta Form Submission">

        <!-- Organization Details Section -->
        <div class="space-y-6">
            <h3 class="text-h4 font-semibold text-pepper-green">Organization details</h3>
            
            <x-core.text-input 
                name="organization_name"
                label="Organization Name"
                placeholder="Enter your organization's name"
                required="true"
            />
            
            <x-core.textarea 
                name="organization_mission"
                label="Organization Mission"
                placeholder="Briefly describe your organization's mission and goals"
                rows="3"
            ></x-core.textarea>
            
            <div class="space-y-2">
                <label class="text-the-end-900 text-body-sm font-medium">Organization Type</label>
                <div class="space-y-2">
                    <x-core.radio 
                        name="organization_type" 
                        value="nonprofit" 
                        label="Nonprofit" 
                    />
                    
                    <x-core.radio 
                        name="organization_type" 
                        value="startup" 
                        label="Startup" 
                    />
                    
                    <x-core.radio 
                        name="organization_type" 
                        value="other" 
                        label="Other" 
                        id="organization_type_other_radio"
                    />
                </div>
            </div>
            
            <div id="organization_type_other_container" class="hidden">
                <x-core.text-input 
                    name="organization_type_other"
                    placeholder="Please specify"
                />
            </div>
        </div>

        <!-- Organization Contact Person Section -->
        <div class="space-y-6">
            <h3 class="text-h4 font-semibold text-pepper-green">Contact Person</h3>
            
            <x-core.text-input 
                name="representative_name"
                label="Contact Name"
                placeholder="Enter your full name"
                required="true"
            />
            
            <x-core.text-input 
                name="representative_email"
                type="email"
                label="Email Address"
                placeholder="Enter your email address"
                required="true"
            />
            
            <x-core.text-input 
                name="representative_phone"
                type="tel"
                label="Phone Number"
                placeholder="Enter your phone number"
            />
        </div>

        <!-- Project Scope Section -->
        <div class="space-y-6">
            <h3 class="text-h4 font-semibold text-pepper-green">Project Scope</h3>
            
            <div class="space-y-2">
                <label class="text-the-end-900 text-body-sm font-medium">Project Type</label>
                <div class="space-y-2">
                    <x-core.radio 
                        name="project_type" 
                        value="project_design" 
                        label="Project Design" 
                    />
                    
                    <x-core.radio 
                        name="project_type" 
                        value="communication_design" 
                        label="Communication Design" 
                    />
                    
                    <x-core.radio 
                        name="project_type" 
                        value="campaign_design" 
                        label="Campaign Design" 
                    />
                </div>
            </div>
            
            <x-core.textarea 
                name="project_description"
                label="Project Description"
                placeholder="Tell us more about your project and what you hope to achieve"
                rows="5"
            ></x-core.textarea>
            
            <x-core.select 
                name="project_budget" 
                label="Project Budget"
                placeholder="Select your budget range"
            >
                <option value="$500-$1,500">$500 - $1,500</option>
                <option value="$1,500-$3,000">$1,500 - $3,000</option>
                <option value="$3,000-$5,000">$3,000 - $5,000</option>
                <option value="More">More</option>
            </x-core.select>
        </div>

        <!-- Legal Section -->
        <div class="space-y-6">
            <h3 class="text-h4 font-semibold text-pepper-green">Legal</h3>
            
            <x-core.checkbox 
                name="how_we_work_agreement" 
                value="agreed"
                label="I understand how Festa works and I'm ready to collaborate" 
                required="true"
            />
            
            <x-core.checkbox 
                name="terms_agreement" 
                value="agreed"
                label="I agree to the Terms of Service and Privacy Policy" 
                required="true"
            />
        </div>

        <!-- Submit Button -->
        <div>
            <x-core.button 
                type="submit" 
                variant="primary" 
                size="large"
                fullWidth="true"
            >
                Talk to Festa
            </x-core.button>
        </div>
    </form>
</div>

<script>
    // Show/hide organization type other field
    document.addEventListener('DOMContentLoaded', function() {
        const otherRadio = document.getElementById('organization_type_other_radio');
        const otherContainer = document.getElementById('organization_type_other_container');
        
        // Initial check
        if (otherRadio.checked) {
            otherContainer.classList.remove('hidden');
        }
        
        // Add event listeners to all organization type radios
        document.querySelectorAll('input[name="organization_type"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (otherRadio.checked) {
                    otherContainer.classList.remove('hidden');
                } else {
                    otherContainer.classList.add('hidden');
                }
            });
        });
    });
</script> 