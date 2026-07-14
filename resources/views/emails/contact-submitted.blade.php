<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permintaan Kontak Baru</title>
</head>
<body style="font-family:Arial,sans-serif;color:#111;background:#f4f7fb;margin:0;padding:0;">
  <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;margin:0 auto;background:#ffffff;border-radius:16px;overflow:hidden;">
    <tr>
      <td style="padding:24px 32px;background:#0f172a;color:#ffffff;">
        <h1 style="margin:0;font-size:24px;">Permintaan Kontak Baru</h1>
        <p style="margin:8px 0 0;font-size:14px;color:#cbd5e1;">dari formulir kontak website Afitech</p>
      </td>
    </tr>
    <tr>
      <td style="padding:30px 32px;">
        <p style="margin:0 0 14px;font-size:16px;color:#0f172a;">Anda menerima pesan baru melalui formulir kontak:</p>
        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
          <tr>
            <td style="padding:12px 0;border-bottom:1px solid #e5e7eb;font-weight:600;width:120px;">Nama</td>
            <td style="padding:12px 0;border-bottom:1px solid #e5e7eb;">{{ $data['name'] }}</td>
          </tr>
          <tr>
            <td style="padding:12px 0;border-bottom:1px solid #e5e7eb;font-weight:600;">Email</td>
            <td style="padding:12px 0;border-bottom:1px solid #e5e7eb;">{{ $data['email'] }}</td>
          </tr>
          <tr>
            <td style="padding:12px 0;border-bottom:1px solid #e5e7eb;font-weight:600;">Pesan</td>
            <td style="padding:12px 0;border-bottom:1px solid #e5e7eb;white-space:pre-wrap;">{{ $data['message'] }}</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td style="padding:24px 32px;background:#f8fafc;color:#475569;font-size:13px;">Pesan ini dikirim melalui halaman kontak Afitech.</td>
    </tr>
  </table>
</body>
</html>
