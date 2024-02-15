
<div>
<?php $this->load->view('header_message'); ?>
</div>
<div class=''>
    <div class="row">
       <div class='col-md-3 col-lg-3'>
       <?php $this->load->view('welcome_message'); ?>
       </div>

       <div class='col-md-8 col-lg-8'>
        <div class="row">

        <?php if (!empty($formData)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Comment</th>
       
                <th> Enroll Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formData as $data): ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['number']; ?></td>
                    <td><?php echo $data['comment']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                 
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No data found.</p>
<?php endif; ?>



