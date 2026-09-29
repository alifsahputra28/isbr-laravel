<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Message — ISBR 2027</title>
</head>
<body style="margin: 0; background-color: #f4f7f5; color: #111814; font-family: Arial, sans-serif;">
    @php
        $interestLabels = [
            'participation' => 'Participation',
            'sponsorship' => 'Sponsorship',
            'other' => 'Other',
        ];
    @endphp

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f4f7f5;">
        <tr>
            <td align="center" style="padding: 32px 16px;">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="max-width: 640px; overflow: hidden; border: 1px solid #e3e9e6; border-radius: 12px; background-color: #ffffff;">
                    <tr>
                        <td style="background-color: #129669; padding: 24px 28px; color: #ffffff;">
                            <p style="margin: 0 0 6px; font-size: 12px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;">ISBR 2027</p>
                            <h1 style="margin: 0; font-size: 24px; line-height: 1.3;">New Contact Message</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 28px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td style="width: 150px; border-bottom: 1px solid #e3e9e6; padding: 10px 12px 10px 0; color: #6b756f; font-size: 14px; vertical-align: top;">Interest</td>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 0; font-size: 14px; vertical-align: top;">{{ $interestLabels[$data['interest']] }}</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 12px 10px 0; color: #6b756f; font-size: 14px; vertical-align: top;">Full Name</td>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 0; font-size: 14px; vertical-align: top;">{{ $data['full_name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 12px 10px 0; color: #6b756f; font-size: 14px; vertical-align: top;">Email</td>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 0; font-size: 14px; vertical-align: top;">{{ $data['email'] }}</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 12px 10px 0; color: #6b756f; font-size: 14px; vertical-align: top;">Phone</td>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 0; font-size: 14px; vertical-align: top;">{{ filled($data['phone'] ?? null) ? '+62 '.$data['phone'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 12px 10px 0; color: #6b756f; font-size: 14px; vertical-align: top;">Subject</td>
                                    <td style="border-bottom: 1px solid #e3e9e6; padding: 10px 0; font-size: 14px; vertical-align: top;">{{ $data['subject'] }}</td>
                                </tr>
                            </table>

                            <div style="margin-top: 24px;">
                                <p style="margin: 0 0 8px; color: #6b756f; font-size: 14px;">Message</p>
                                <div style="border: 1px solid #e3e9e6; border-radius: 8px; background-color: #f8faf9; padding: 16px; font-size: 14px; line-height: 1.7;">{!! nl2br(e($data['message'])) !!}</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-top: 1px solid #e3e9e6; padding: 18px 28px; color: #6b756f; font-size: 12px; line-height: 1.6;">
                            This message was submitted through the official Ibnu Sina Batam Run 2027 website.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
