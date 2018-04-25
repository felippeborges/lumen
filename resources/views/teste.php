<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="name" value="Erik's bar">
    <input type="text" name="description" value="Melhor Wiski da região">
    <input type="file" name="photo" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
  $('#file').on('change', function () {
    let formData = new FormData();
    formData.append('name', 'Erik\'s bar');
    formData.append('description', 'Melhor Wiski da região');
    formData.append('photo', $('#file')[0].files[0]);
    let headers = {
      'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjUzZTI4ZWM1YTQyZDJjYWVlODUwOWYxYTlhZWU5ODNjZjc1NDExOTQ0ODdlZjI5OWNkMWZiMDYxODhjZDAwNmU4OTdjYzAxYmUxNThiZmMyIn0.eyJhdWQiOiIzIiwianRpIjoiNTNlMjhlYzVhNDJkMmNhZWU4NTA5ZjFhOWFlZTk4M2NmNzU0MTE5NDQ4N2VmMjk5Y2QxZmIwNjE4OGNkMDA2ZTg5N2NjMDFiZTE1OGJmYzIiLCJpYXQiOjE1MjQ1OTMzODAsIm5iZiI6MTUyNDU5MzM4MCwiZXhwIjoxNTU2MTI5MzgwLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.hqEnwfnUePIMV_w4MftsHiuaS_yTUMluEnNqz6mQ9CyS_AbLVIsqS0jhnBqTzbtqT-fqBaI74Ys4i7cbd5gcUCwjjK6pjEYp3oCUQ3x6g1BTprmRGrKKPeqNoIm18NszPVDkqx9bCodMxPFPzDq4gLiu1kQCdQi-GsM80nNmpvBNudOIIfNnr5dnjo_V1MMOIqC0r3p2NSH3qTcM3b-RHXprBFVsark113jw3IRXugPjmqEDLvOkpvb-vAZsIB2x4zd7bfHvseic0BHBWUADBV25u7gDGPChAkT1hNQ6kUoc1s-OAJuDoFvGZ3uECFGQnMTGQHOCyDyAwTVedR0iadhVFX1PDmJepyuvyFmN5sH7_iADf4uNKNhFYZS6jaGW7dOJgr-HA6wCUFx1domk4upfFMZNhBXIISntFlhozMh58tGXzQWu5Uk2rtFXx2NDABzlfnX8wDFRWbTx-n8yhX00qSYA7TxIgBeP3Us-ldpplf3Y09JXjKejE8XIkseD1nMEYTmxOsSjSsagh2Xr2x1x6Z4DpFBm0w7JkJMdspfw07JdRYljHDG22Z4x3pPfDsMEcuc8U111dXQGXXHAngKhzPzuX0C3NyxheLlmrRVcDY57Wplu45VkO8_vaem15leupuzvYVZpC0qtTGAU8hAFCmfjGwB1Bj2pOWuveEE',
       //'content-type': 'multipart/form-data'
      'content-type': 'application/x-www-form-urlencoded'
    }
    axios.post('http://localhost:8000/api/v1/restaurants/5', formData, {headers: headers})
  })
</script>
</body>
</html>