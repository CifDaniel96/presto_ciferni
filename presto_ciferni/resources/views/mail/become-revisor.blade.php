<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto.it - Richiesta revisore</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f7f8fa; font-family: Arial, sans-serif; color: #17202a;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 32px 16px;">
        <tr>
            <td align="center">
                <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 620px; background-color: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(23, 32, 42, 0.12);">
                    <tr>
                        <td style="padding: 32px; text-align: center; background-color: #eef4ff;">
                            <h1 style="margin: 0; font-size: 28px; color: #17202a;">
                                Presto.it
                            </h1>

                            <p style="margin: 10px 0 0; color: #6c757d; font-size: 16px;">
                                Nuova richiesta per diventare revisore
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 32px;">
                            <h2 style="margin: 0 0 16px; font-size: 22px;">
                                Un utente vuole collaborare con il team
                            </h2>

                            <p style="margin: 0 0 24px; line-height: 1.6; color: #495057;">
                                Un utente registrato ha inviato una richiesta per diventare revisore sulla piattaforma Presto.it.
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f7f8fa; border-radius: 16px; padding: 20px; margin-bottom: 28px;">
                                <tr>
                                    <td style="padding: 8px 0; font-weight: bold;">
                                        Nome:
                                    </td>
                                    <td style="padding: 8px 0;">
                                        {{ $user->name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding: 8px 0; font-weight: bold;">
                                        Email:
                                    </td>
                                    <td style="padding: 8px 0;">
                                        {{ $user->email }}
                                    </td>
                                </tr>
                            </table>

                            <p style="margin: 0 0 24px; line-height: 1.6; color: #495057;">
                                Se vuoi approvare la richiesta e rendere questo utente revisore, clicca sul pulsante qui sotto.
                            </p>

                            <div style="text-align: center;">
                                <a href="{{ route('make.revisor', compact('user')) }}"
                                   style="display: inline-block; background-color: #17202a; color: #ffffff; text-decoration: none; padding: 12px 26px; border-radius: 999px; font-weight: bold;">
                                    Rendi revisore
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 20px 32px; text-align: center; background-color: #f1f3f5; color: #6c757d; font-size: 14px;">
                            © 2026 Presto.it
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>