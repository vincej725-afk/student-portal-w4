<x-layout title="Contact Support — Student Portal">
    <div class="page-header">
        <h1 class="page-title">Student Support & Inquiry</h1>
        <p class="page-subtitle">Handled by invokable <code>ContactController</code></p>
    </div>

    <x-alert type="success" title="Office Active">
        The Registrar & Student Affairs office is open for student consultations during regular campus hours.
    </x-alert>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem;">
        <div style="background: var(--surface); padding: 1.75rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
            <h2 style="font-size: 1.25rem; color: var(--dark); margin-bottom: 1.25rem;">Contact Information</h2>
            
            <div style="margin-bottom: 1rem;">
                <span class="fact-label">Campus Office</span>
                <p class="fact-value">{{ $contactDetails['office'] }}</p>
            </div>

            <div style="margin-bottom: 1rem;">
                <span class="fact-label">Direct Email</span>
                <p class="fact-value"><a href="mailto:{{ $contactDetails['email'] }}" style="color: var(--primary); text-decoration: none;">{{ $contactDetails['email'] }}</a></p>
            </div>

            <div style="margin-bottom: 1rem;">
                <span class="fact-label">Telephone Line</span>
                <p class="fact-value">{{ $contactDetails['phone'] }}</p>
            </div>

            <div style="margin-bottom: 1rem;">
                <span class="fact-label">Physical Location</span>
                <p class="fact-value">{{ $contactDetails['location'] }}</p>
            </div>

            <div>
                <span class="fact-label">Consultation Hours</span>
                <p class="fact-value">{{ $contactDetails['hours'] }}</p>
            </div>
        </div>

        <div style="background: var(--surface); padding: 1.75rem; border-radius: var(--radius-md); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
            <h2 style="font-size: 1.25rem; color: var(--dark); margin-bottom: 1.25rem;">Quick Consultation Ticket</h2>
            
            <form onsubmit="event.preventDefault(); alert('Demo Notice: Contact inquiries are logged for lab demonstration.');">
                <div class="form-group">
                    <label class="form-label">Student ID Number</label>
                    <input type="text" class="form-control" placeholder="e.g. 2023-01452" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Inquiry Topic</label>
                    <input type="text" class="form-control" placeholder="Course prerequisite or scheduling query" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Message Details</label>
                    <textarea class="form-control" rows="4" placeholder="Briefly describe your request..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Inquiry</button>
            </form>
        </div>
    </div>
</x-layout>
