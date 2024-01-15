<?php
session_start();

if (extension_loaded('curl')) {
    if (isset($_POST['mobile'])) {
        $mobile = $_POST['mobile'];
        $otp = rand(0000, 9999);
        $_SESSION['OTP'] = $otp;

        $API = "b9d433ad54b390e58c223f0815668d8e";
        $PHONE = $mobile;
        $OTP = $otp;
        $REQUEST_URI = "https://sms.renflair.in/V1.php?";
        $URL="https://sms.renflair.in/V1.php?API=$API&PHONE=$PHONE&OTP=$OTP";
        $ch = curl_init($URL);
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the cURL request
        $resp = curl_exec($ch);

        // Check for any cURL errors
        if (curl_errno($ch)) {
            $status = 'error';
            $message = 'Error sending OTP: ' . curl_error($ch);
        } else {
            curl_close($ch);

            $data = json_decode($resp);
            $status = $data->status ?? 'unknown';
            $message = $data->message ?? 'OTP sent successfully';
        }
    } else {
        $status = 'error';
        $message = 'No mobile number provided';
    }
} else {
    $status = 'error';
    $message = 'cURL extension is not loaded';
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode(['status' => $status, 'message' => $message]);