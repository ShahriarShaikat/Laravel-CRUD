<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Show | Event</title>
</head>

<body>
   <center>
    <form method="post">
        {{@csrf_field()}}
      
        <br>
        <p>
            <a href="{{route('event.edit',[$event->id])}}">Edit event</a>
        </p>
        <table border="2">
            <tr>
                  <td> <label>Event Name</label></td>
                  <td> <label>Event Details</label></td>
                  <td> <label>IMPORTANCE</label></td>    
            </tr>
            <tr>
                <td>{{$event->event_name}}</td>
                <td>{{$event->event_details}}</td>
                <td>{{$event->importance}}</td>
            </tr>
        </table>
        <br><br>
        <p>Want to delete event???</p>
        <input type="submit" value="Yes">
   </form>
   </center>

</body>

</html>
