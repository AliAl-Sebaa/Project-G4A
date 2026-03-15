<?php
require_once '../config/database.php';
checkLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ticket_id = "KEY-" . rand(1000, 9999);
    $user_id = $_SESSION['user_id'];
    $type = $_POST['type'];
    $cat = $_POST['category'];
    $prio = $_POST['priority'];
    $desc = $_POST['description'];
    
    // File Upload Logic
    $attachment = "";
    if(!empty($_FILES['file']['name'])) {
        $attachment = time() . "_" . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/" . $attachment);
    }

    $stmt = $pdo->prepare("INSERT INTO requests (ticket_id, user_id, request_type, category, priority, description, attachment) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if($stmt->execute([$ticket_id, $user_id, $type, $cat, $prio, $desc, $attachment])) {
        $success = "Request submitted successfully. Ticket ID: $ticket_id";
    }
}
?>
<!-- Header & Sidebar Included Here (Same as Dashboard) -->
<div class="main-content">
    <div class="card p-5 max-width-800 mx-auto">
        <h3>Create New Support Ticket</h3>
        <?php if(isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Request Type</label>
                    <select name="type" class="form-select" required>
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Priority</label>
                    <select name="priority" class="form-select">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                        <option value="Critical">Critical</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label>Issue Category</label>
                <input type="text" name="category" class="form-control" placeholder="e.g. Printer Connection Issue" required>
            </div>
            <div class="mb-3">
                <label>Detailed Description</label>
                <textarea name="description" class="form-control" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label>Attachment (Optional)</label>
                <input type="file" name="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary px-5">Submit Request</button>
        </form>
    </div>
</div>