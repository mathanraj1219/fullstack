<!DOCTYPE html>
<html>
<head>
    <title>MoU Notification</title>
</head>
<body>
    <h1>{{ $mou->end_date < now() ? 'MoU Expired' : 'Reminder: MoU Expiration Approaching' }}</h1>
    <p>Hello,</p>
    <p>
        {{ $mou->end_date < now() 
            ? 'This is to inform you that the MoU titled "' . $mou->name . '" has already expired on ' . $mou->end_date . '.'
            : 'This is a reminder that the MoU titled "' . $mou->name . '" will expire on ' . $mou->end_date . '.' 
        }}
    </p>
    <p>Please take the necessary actions for renewal.</p>
    <p>Thank you!</p>
</body>
</html>
