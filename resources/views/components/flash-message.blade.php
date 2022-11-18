
@if (session()->has(['message', 'success']))
   
<div class="fixed top-0  left-1/2 bg-green-600 text-white font-semibold -translate-x-1/2 transform px-48 py-4" x-data="{ show : true }" x-init=" setTimeout(() => show = false, 3000) " x-show="show">
    
    <p>{{ session('message') }}</p>
    
</div>

@endif