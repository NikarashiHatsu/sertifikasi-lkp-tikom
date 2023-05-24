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
