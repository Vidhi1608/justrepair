
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  
    <title>JRI Admin Panel</title>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
     .icon{
      margin-left: -5px!important;
     } 
    .p-cont{
      margin-left: -2px!important;
     }
     .icon2{
      margin-left: 3px!important;
     } 
    .p-cont2{
      margin-left: 7px!important;
     }
     .btn-add{
        background-color: #419eaa!important;
        color: white;
        transition-duration: 0.6s!important;
        padding: 5px;
        padding-left: 5px;
        padding-right: 10px;
        border-radius: 5px;
        text-decoration: none!important;
     }
     .btn-add:hover{
        background-color: #fcc71f!important;
        transition-duration: 0.6s!important;
        color: #000!important;
     }
    /* .over{
      overflow: hidden;
    } */
    .btn-cyan{
       background-color: #419eaa!important;
       border-color: #419eaa!important;
       color:whitesmoke!important;
     }
     .color{
      color: #484242;
     }
     .searchbar-corner{
       margin-left: 75%;
     }
     .btn-delete{
      padding: 1px;
      padding-right: 5px;
      padding-left: 5px;
      border-radius: 5px;
      color: white!important;
      background-color: rgb(236, 16, 16)
     }
     .page-item.active .page-link {
    z-index: 3;
    color: #fcc71f;
    background-color: #419eaa;
    border-color: #419eaa;
     }

     .report-bt {
        
        font-size: 12px;
        cursor: pointer;
        -webkit-animation: glowing 1500ms infinite;
     }

     @-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}
    </style>
  