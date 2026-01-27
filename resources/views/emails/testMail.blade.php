Subject: New Project Proposal – Purple Leaf Contact Form

<div style="font-family: 'Segoe UI', Tahoma, Arial, sans-serif; background:#f5f3ff; padding:30px;">
    <div style="max-width:650px; margin:auto; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background:linear-gradient(90deg,#6f42c1,#9b5de5); padding:24px; color:#ffffff;">
        <h1 style="margin:0; font-size:24px;">📩 New Project Proposal Received</h1>
        <p style="margin:6px 0 0; font-size:14px; opacity:0.9;">
            A potential client has submitted a project idea via Purple Leaf
        </p>
    </div>

    <!-- Content -->
    <div style="padding:30px;">
        <h2 style="margin-top:0; color:#4b2aad;">Client Information</h2>

        <table style="width:100%; border-collapse:collapse; margin-bottom:24px;">
            <tr>
                <td style="padding:10px 0; font-weight:600; width:180px;">Full Name</td>
                <td style="padding:10px 0;">{{ $data['fullName'] }}</td>
            </tr>
            <tr>
                <td style="padding:10px 0; font-weight:600;">Business Name</td>
                <td style="padding:10px 0;">{{ $data['businessName'] }}</td>
            </tr>
            <tr>
                <td style="padding:10px 0; font-weight:600;">Email Address</td>
                <td style="padding:10px 0;">{{ $data['email'] }}</td>
            </tr>
        </table>

        <h2 style="color:#4b2aad;">Project Overview</h2>

        <div style="background:#f3e8ff; padding:18px; border-radius:8px; line-height:1.7; color:#333;">
            {{ $data['projectIdea'] }}
        </div>

        <p style="margin-top:30px; font-size:14px; color:#666;">
            This proposal was submitted through the Purple Leaf website contact form.
        </p>
    </div>

    <!-- Footer -->
    <div style="background:#faf5ff; padding:18px; text-align:center; font-size:13px; color:#777;">
        © {{ date('Y') }} Purple Leaf · Creative & Digital Studio
    </div>
</div>
```

</div>
