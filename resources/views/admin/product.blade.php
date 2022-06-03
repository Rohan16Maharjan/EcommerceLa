<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{url('assets\admin\css\category.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                </span>

                <div class="text logo-text">
                    <span class="name">Dashboard</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{route('dashboard')}}">
                            <i class='bx bx-table icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{url('admin/category')}}">
                            <i class='bx bx-save icon' ></i>
                            <span class="text nav-text">Category</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{url('admin/product')}}">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Product</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{url('admin/customer')}}">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Customer</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="{{url('admin')}}">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Products</div>
        <div class="session">{{session('message')}}</div>
        <a href="{{url('admin/product/manage_product')}}">
            <button type="button" class="btn">Add Product</button>
        </a>
        <table>
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Short desc</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $list)
    <tr>
      <td>{{$list->id}}</td>
        <td> @if($list->image!='')
                                <img width="100px" src="{{asset('storage/media/'.$list->image)}}"/>
                            @endif</td>
      <td>{{$list->name}}</td>
      <td>{{$list->brand}}</td>
      <td>{{$list->short_desc}}</td>
      <td>{{$list->price}}</td>
      <td>{{$list->qty}}</td>
      <td>{{$list->desc}}</td>
      <td>{{$list->slug}}</td>
      <td>
            <a href="{{url('admin/product/manage_product/')}}/{{$list->id}}"><button class="edit">Edit</button></a>
          <a href="{{url('admin/product/manage_product_delete/')}}/{{$list->id}}"><button class="delete">Delete</button></a>
          
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </section>
 
    

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

// modeSwitch.addEventListener("click" , () =>{
//     body.classList.toggle("dark");
    
//     if(body.classList.contains("dark")){
//         modeText.innerText = "Light mode";
//     }else{
//         modeText.innerText = "Dark mode";
        
//     }
// });
    </script>

</body>
</html>
