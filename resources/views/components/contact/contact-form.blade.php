<div>
    <h2>Send us a Message</h2>
    
    @guest
        <p>Fill out the form below to get in touch with our team:</p>
    @else
        <p>Hello {{ auth()->user()->name }}, send us a message:</p>
    @endguest
    
    <form action="/contact" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="service">Service Interested:</label>
            <select name="service" id="service">
                <option value="">Select a service</option>
                <option value="web-development">Web Development</option>
                <option value="mobile-app">Mobile App Development</option>
                <option value="digital-marketing">Digital Marketing</option>
            </select>
            @error('service')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5">{{ old('message') }}</textarea>
            @error('message')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit">Send Message</button>
    </form>
</div>
</div>