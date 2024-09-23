<style>
    .primary {
        background-color: blue;
    }

    .secondary {
        background-color: green;
    }

    .danger {
        background-color: red;
    }

    button {
        padding: 10px;
        margin: 10px;
    }
</style>
<?php5. *Database Connectivity*: Write a PHP script that connects to a MySQL database and retrieves a list of users. Display the list in a table format on a webpage.


function button($text, $class)
{
    return "<button class='$class'>$text</button>";
}
echo button('Primary Button', 'primary');
echo button('Secondary Button', 'secondary');
echo button('Danger Button', 'danger');
?>