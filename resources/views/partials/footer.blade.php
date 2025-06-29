<footer>
    <div>
        <p>&copy; {{ $year ?? date('Y') }} ISMC - Innovations Solution and Marketing Corporation</p>
        <p>Email: info@ismc.ph | Phone: +63 2 8123-4567</p>
        
        @isset($customMessage)
            <p>{{ $customMessage }}</p>
        @endisset
    </div>
</footer>