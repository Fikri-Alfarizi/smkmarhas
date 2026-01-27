<div class="hero-wrapper">
    <div class="hero-bg" @if(isset($heroImage)) style="background-image: url('{{ $heroImage }}')" @endif>
        <span>1440 x 300 px</span>
    </div>
</div>

<div class="mobile-hero">
    <img src="{{ $heroImageMobile ?? asset('image/12.jpg') }}" alt="Hero Image">
    <span>440x141px</span>
</div>

<div class="breadcrumb fade-in">
    <div class="breadcrumb-item">
        <div class="breadcrumb-dot"></div>
        @foreach($breadcrumbs as $crumb)
            @if(!$loop->first) <span>/</span> @endif
            @if(!empty($crumb['url']))
                <a href="{{ $crumb['url'] }}" class="breadcrumb-link">{{ $crumb['label'] }}</a>
            @else
                <span>{{ $crumb['label'] }}</span>
            @endif
        @endforeach
    </div>
    <div class="breadcrumb-title">
            {!! $heading !!}
    </div>
    <a href="{{ route('bkk.registrasi') }}" class="breadcrumb-btn" style="text-decoration:none">
        Daftar SPMB
    </a>
</div>

<div class="mobile-breadcrumb fade-in">
    <div class="mobile-breadcrumb-item">
        <div class="mobile-breadcrumb-dot"></div>
        @foreach($breadcrumbs as $crumb)
            @if(!$loop->first) <span>/</span> @endif
            @if(!empty($crumb['url']))
                <a href="{{ $crumb['url'] }}" class="breadcrumb-link">{{ $crumb['label'] }}</a>
            @else
                <span>{{ $crumb['label'] }}</span>
            @endif
        @endforeach
    </div>
    <div class="mobile-breadcrumb-title">
        {!! $heading !!}
    </div>
    <a href="{{ route('bkk.registrasi') }}" class="mobile-breadcrumb-btn" style="text-decoration:none">
        <i class="fas fa-edit"></i> Daftar SPMB
    </a>
</div>