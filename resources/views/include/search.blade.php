
<!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
<div id="modal-search" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-search"></i> Generic Search</h2>
            </div>
            <!-- END Modal Header -->

             <!-- Modal Body -->
            <div class="modal-body">

<form action="{{route('generic.search')}}" method="post" onload="searchType();" onsubmit="SearchBase();">
    @csrf

        <label>Search Base <span style="color: red;">*</span></label>
        <select class="form-control" name="search_table" id="search_table" required="true" onchange="searchType();" >
            <option disabled="true" selected="true" value="null">Select Search Base</option>
            <option value="projects">Projects</option>
            <option value="users">Users</option>
        </select>


     <label>Keywords <span style="color: red;">*</span></label>
        <input type="text" class="form-control" name="keywords" placeholder="keywords" required="true">

        <div style="visibility: hidden;" id="user_id_div">
        <label>User ID</label>
              <input type="text" class="form-control" name="user_id" id="user_id" >  
        </div>

        <div style="visibility: hidden;" id="project_id_div">
         <label>Project ID </label>
              <input type="text" class="form-control" name="project_id" id="project_id" >
         </div>


        <button type="submit"><i class="fa fa-binoculars"></i> &nbsp; Find</button>

</form>


               
</div>
<!-- END Modal Body -->
        </div>
    </div>
</div>
<!-- END User Settings -->

<script type="text/javascript">
    function searchType(){
   
   var search_table = document.getElementById('search_table').value;

       if (search_table == "users") {
        document.getElementById('user_id_div').style.visibility="visible";
        document.getElementById('project_id_div').style.visibility="hidden";
        }else{
        document.getElementById('user_id_div').style.visibility="hidden";
        document.getElementById('project_id_div').style.visibility="visible";

       }
    }


   function SearchBase()
   {
    var sb = document.getElementById('search_table').value;
    if (sb == null) {
        form.submit = false;
        alert('Please select search base');

    }
   }
</script>