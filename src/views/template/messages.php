<?php
$errors = [];

if($exception) {
    $message = [
        'type' => "error",
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === "ValidationException") {
        $errors = $exception->getErrors();
    }
}

$alertType = $message['type'] === "error" ? "danger" : "success";
?>

<?php if($message): ?>
    <div class="my-3 alert alert-<?= $alertType ?>" role="alert">
        <?= $message['message'] ?>
    </div>
<?php endif ?>