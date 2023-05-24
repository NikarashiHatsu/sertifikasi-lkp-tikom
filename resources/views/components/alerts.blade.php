@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            alertSuccess('{{ session('success') }}');
        });
    </script>
@endif

@if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            alertError('{{ session('error') }}');
        });
    </script>
@endif

{{-- @if ($errors->any())
    <div class="alert alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
