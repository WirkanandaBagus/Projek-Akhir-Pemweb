<nav class="navbar">
    <a href="/"><img class="logo" src="{{URL::to('img/LogoNavHomeInfusion.png')}}" /></a>
    <ul class="div-nav">
        <li>
            <a class="menu" href="/">Home</a>
        </li>
    @if ($title === 'Home')
        <li>
            <a class="{{ $title === 'Relation' ? 'menus' : 'menu' }}" href="#tentang-kami">Tentang Kami</a>
        </li>
        <li>
            <a class="{{ $title === 'Relation' ? 'menus' : 'menu' }}" href="#layanan-kami">Layanan Kami</a>
        </li>
        <li>
            <a class="{{ $title === 'Publication' ? 'menus' : 'menu' }}" href="#testimoni">Testimoni</a>
        </li>
    @endif
        <li>
            <a class="{{$title === 'Service' ? 'menus' : 'menu'}}" href="/dashboard">Reservasi</a>
        </li>
    </ul>
</nav>
