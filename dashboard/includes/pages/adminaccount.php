<h1>Manage Accounts</h1>

<table>
    <thead>
        <tr>
            <span>Admin Account</span>
            <form action="../../../../../dashboard/includes/functions/api.php" method="post">
                <button type="submit" class="btn btn-green">ADD</button>
            </form>
        </tr>
        <tr>
            <td>Account ID</td>
            <td>Name/Surname</td>
            <td>Username</td>
            <td>Password</td>
            <td>Status</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>OongOong Narak</td>
            <td>oongnoi</td>
            <td>oongoongnarakteesud1234</td>
            <td>Active</td>
            <td>
                <form action="../../../../../dashboard/includes/functions/api.php" method="post">
                    <button type="submit" class="btn btn-green">EDIT</button>
                </form>
            </td>
            <td>
                <form action="../../../../../dashboard/includes/functions/api.php" method="post">
                    <button type="submit" class="btn btn-red">DELETE</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>