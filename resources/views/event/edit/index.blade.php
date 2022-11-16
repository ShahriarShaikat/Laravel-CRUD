<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit | Event</title>
</head>

<body>
   <center>
        <h1>Edit  EVENT</h1>
    <form method="post">
       {{@csrf_field()}}
        <table>
            <tr>
                <td><strong>Event Name</strong></td>
                <td><input type="text" name="eventName"></td>
            </tr>
            <tr>
                <td><strong>Event Details</strong></td>
                <td><textarea name="eventDetails" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><strong>Event Importance</strong></td>
                <td>
                
                    <select name="importance">
                        <option value="high">high</option>
                        <option value="moderate">moderate</option>
                        <option value="less important">less important</option>

                    </select>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Update"></td>
            </tr>
        </table>
         <a href="{{route('home.index')}}">back</a> |
    </form>
   </center>
</body>

</html>
