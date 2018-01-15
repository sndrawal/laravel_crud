<form method="post" action="{{url('demo/store')}}">
    {!! csrf_field() !!}
    Title : <input type="text" name="title">  <br /> <br />
    Address : <input type="text" name="address"> <br /> <br />
    Email : <input type="email" name="email"> <br /> <br />
    Price : <input type="text" name="price"> <br /> <br />
    Status : <select name="status"><option value='0'>Active</option>
    <option value='1'>InActive</option></select> <br /> <br />
    <input type="submit" value="Submit">
</form>
