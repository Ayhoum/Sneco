<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="../agent_index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>Transactions</span> <span class="label label-important"><?php echo $countcTrans; ?></span></a> <ul>
                <li><a href="transaction.php">All transactions </a></li>
                <li><a href="ctransaction.php">Completed transactions </a></li>
                <li><a href="ptransaction.php">Pending transactions</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Currency rates</span></a>
            <ul>
                <li><a href="currency.php">Current Currencies </a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Invoices</span></a>
            <ul>
                <li><a href="../dumb/invoices.php">Current Invoices</a></li>
                <li><a href="../dumb/add_invoice.php">Add Invoice</a></li>
            </ul>
        </li>
        <li class="content"> <span>Completed Transactions</span>
            <div class="progress progress-mini progress-danger active progress-striped">
                <div style="width: <?php echo $per . "%"; ?>;" class="bar"></div>
            </div>

            <span class="percent"><?php echo $per . "%"; ?></span>
            <div class="stat"><?php echo $countcTrans; ?> / <?php echo $countTrans; ?></div>
        </li>

    </ul>
</div>