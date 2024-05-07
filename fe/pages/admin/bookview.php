<?php

function listbook($books)
{
?>
    <h1>
        <center>
            List of Books
        </center>
    </h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>

        <?php
        foreach ($books as $book) { ?>
            <tr>
                <td><?php echo $book->username; ?></td>
                <td><?php echo $book->name; ?></td>
                <td><?php echo $book->isActive ? "Active" : "Deactivated"; ?></td>
                <td>
                    <form name="activateForm" method="post" action="../../be/ActivateBook.php">
                        <input type="hidden" name="id" value="<?php echo $book->id; ?>">
                        <input type="hidden" name="activate" value="<?php echo $book->isActive ? 0 : 1; ?>">
                        <input type="submit" value="<?php echo $book->isActive ? "Deactivate" : "Activate"; ?>">
                    </form>
                </td>
                <td>
                    <form name="deleteForm" method="post" action="../../be/DeleteBook.php">
                        <input type="hidden" name="id" value="<?php echo $book->id; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}