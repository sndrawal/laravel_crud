<form method="post" action="{{url('demo/update/'.$demo->id)}}">
    {!! csrf_field() !!}
    Title : <input type="text" name="title" value="{{$demo->title}}">  <br /> <br />
    Address : <input type="text" name="address" value="{{$demo->address}}"> <br /> <br />
    Email : <input type="email" name="email" value="{{$demo->email}}"> <br /> <br />
    Price : <input type="text" name="price" value="{{$demo->price}}"> <br /> <br />
    Status : <select name="status">
    <option value='0'  @if($demo->status == '0') {{'selected'}} @endif >Active</option>
    <option value='1'  @if($demo->status == '1') {{'selected'}} @endif>InActive</option>
    </select> <br /> <br />
    <input type="submit" value="Submit">
</form>
