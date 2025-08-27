<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chroma CCS</title>
    <meta name="description" content="Chroma Creative Studio blends art, design & technology. Since 2017, we deliver branding, digital solutions, web & app development, photography, motion graphics & interior design." />
    <meta name="keywords" content="Chroma Creative Studio, creative & digital solutions, branding and design services, logo design, brand identity, UI/UX design, website development, mobile app development, custom illustrations, photography services, videography, motion graphics, 3D modeling, CGI, digital art, interior design, creative storytelling, visual production, innovative design" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('/') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icons/chroma_logo_icon.png') }}">
    <meta name="theme-color" content="#0d6efd">

    <meta property="og:type" content="website">
    <meta property="og:title" content="chroma.ccs">
    <meta property="og:description" content="Chroma Creative Studio is a multidisciplinary powerhouse in branding, design & digital solutions. From logos and web development to photography, motion graphics & interior design, we fuse creativity with technology to deliver impactful experiences." />
    <meta property="og:url" content="{{ url('https://www.instagram.com/chroma.ccs?igsh=ZzN3Znlqdzd0Y3Ex') }}">
    <meta property="og:site_name" content="Chroma.ccs">
    <meta property="og:image" content="{{ asset('images/under-construction/CCS-Page-big.jpg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="page">
    <picture>
        <!-- Mobile first source -->
        <source
            srcset="{{ asset('images/under-construction/CCS-Page-small.jpg') }}"
            media="(max-width: 767.98px)">

        <!-- Fallback / default image -->
        <img
            src="{{ asset('images/under-construction/CCS-Page-big.jpg') }}"
            alt="Under construction"
            loading="eager"
            decoding="async"
            sizes="100vw"
            class="d-block"> <!-- keep it simple; we force height via CSS -->
    </picture>
</div>
</body>
</html>

