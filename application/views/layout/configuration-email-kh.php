<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request a demonstration</title>
</head>
<body>
<h4>Dear <?php echo $data['fullName']; ?>,</h4>
<p>
    យើងបានទទួលសំណើរមួយពីអ្នកនៅម៉ោង <a href="<?php echo base_url(); ?>"><?php echo base_url(); ?></a>.
</p>
<h3 style="color: #003399;"><u>សេចក្តីលម្អិតនៃសំណើរ:</u></h3>
<table border="0" cellpadding="0" cellspacing="1px" style="width: 100%; border-color: #CCCCCC;">
    <thead style="background-color: #003399; color: white; font-weight: bold; text-align: center">
    <tr>
        <td><h4>#</h4></td>
        <td><h4>Customer Information</h4></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">នាម និងត្រកូល</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;"><?php echo ($data['fullName']); ?></td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">អាសយដ្ឋាន</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;"><?php echo ($data['address']); ?></td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">ទីក្រុង</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;"><?php echo ($data['city']); ?></td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">ប្រទេស</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;"><?php echo ($data['country']); ?></td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">Email</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;">
            <a href="mailto:<?php echo ($data['email']); ?>"><?php echo ($data['email']); ?></a>
        </td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">លេខទូរស័ព្ទ</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;"><?php echo ($data['phoneNumber']); ?></td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">ជ្រើសរើសភាសាសម្រាប់ការណែនាំបង្ហាញ</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;">
            <ul>
                <?php foreach ($data['lang'] as $language) : ?>
                    <li><?php echo $language; ?></li>
                <?php endforeach; ?>
            </ul>
        </td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">Individual cleaning need</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;">
            <ul>
                <?php foreach ($data['individual'] as $val) : ?>
                    <li><?php echo lang($val); ?></li>
                <?php endforeach; ?>
            </ul>
        </td>
    </tr>
    <tr>
        <td style="width: 135px; text-align: right; background-color: #1b6d85; color: white; padding: 5px;">តើអ្នកស្គាល់ពួកយើងតាមរបៀបណា?</td>
        <td style="padding: 5px; font-size: 14px; background-color: #CCCCCC;"><?php echo ($data['howDid']); ?></td>
    </tr>
    </tbody>
</table>
<p>សូមរំលងអ៊ីមែលនេះ ប្រសិនបើអ្នកមិនផ្ញើអ៊ីមែលមកកាន់យើងទេនោះ។ អាចនឹងមាននរណាម្នាក់ផ្សេងពីអ្នកដែលបានប្រើអ៊ីមែលនេះ។ .</p>
<p>
    Tសូមអរគុណ!,<br>
    <?php echo lang('rainbow_cambodia'); ?>
</p>
<div style="font-style: italic; color: #7f7f84; text-align: center; padding: 5px;">
    <u>កាលបរិច្ឆេទ និងម៉ោង៖</u> <?php echo date('Y-m-d H:i:s'); ?>
</div>
</body>
</html>