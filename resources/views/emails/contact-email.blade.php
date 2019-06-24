<style>
    html, body {
        background-color: #E8EAED;
    }
</style>
<body style="background-color: #E8EAED">
<div style="padding: 10px; background-color: #FFFFFF">
    <table style="font-family: Arial !important; width: 100%;">
        <tr>
            <td style="padding: 12px">
                <a href="{{ route('front.index') }}" target="_blank">
                    <img src="{{ asset('/media/app/mindora.png') }}" alt="Logo Brandkoach" width="118px" height="41px">
                </a>
            </td>
        </tr>
        <tr>
            <td style="border-top: solid 1px #E8EAED; border-bottom: solid 1px #E8EAED; width: 100%; padding: 12px;">
                <h2 style="margin-bottom: 0">Información del mensaje</h2>
                <p style="color: #0DA5EC; margin-top: 3px; font-size: 12px">¡Hey! Nuevo mensaje de Mindora | contacto</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 12px; padding-top: 24px; padding-bottom: 24px">
                <p style="color: #000000; !important;"><span style="color: #5F6368; font-size: 13px; padding-bottom: 4px; display: block">Nombre completo:</span>{{ $full_name }}</p>
                <p style="color: #000000; !important;"><span style="color: #5F6368; font-size: 13px; padding-bottom: 4px; display: block">Correo eletrónico:</span>{{ $email }}</p>
                <p style="color: #000000; !important;"><span style="color: #5F6368; font-size: 13px; padding-bottom: 4px; display: block">Teléfono:</span>{{ $phone }}</p>
                <p style="color: #000000; !important;"><span style="color: #5F6368; font-size: 13px; padding-bottom: 4px; display: block">Servicio:</span>{{ $service }}</p>
                <p style="color: #000000; !important;"><span style="color: #5F6368; font-size: 13px; padding-bottom: 4px; display: block">Comentario:</span>
                    {{ $info }}
                </p>
            </td>
        </tr>
        <tr>
            <td style="border-top: solid 1px #E8EAED; width: 100%; padding: 26px 12px 12px 12px; text-align: center">
                <a href="{{ route('front.index') }}" target="_blank" style="color: #5266F4; margin-top: 4px; font-size: 12px; text-decoration: none">Mindora | {{ now()->year }}</a>
            </td>
        </tr>
    </table>
</div>
</body>