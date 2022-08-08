<?php include("get_schedules.php");?>
<div class="table-responsive mt-3">
    <table class="display wrap" style="width:100%" id="schedules">
        <thead>
            <tr>
                <th>Date</th>
                <th>District</th>
                <th>Work Description</th>
                <th>Affected Areas</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($schedules as $schedule): ?>
                <tr>
                    <td><?= $schedule->schedule_date . ", " . $schedule->schedule_time ?></td>
                    <td><?= $schedule->district ?></td>
                    <td><?= $schedule->work_description ?></td>
                    <td><?= $schedule->affected_areas ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>District</th>
                <th>Work Description</th>
                <th>Affected Areas</th>
            </tr>
        </tfoot>
    </table>
</div>