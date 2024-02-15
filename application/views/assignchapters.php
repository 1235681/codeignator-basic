

<div>
<?php $this->load->view('header_message'); ?>
  </div>
</div>
<div class=''>
    <div class="row">
       <div class='col-md-3 col-lg-3'>
       <?php $this->load->view('welcome_message'); ?>
       </div>
       <style>
         body {
          
          align-items: center;
          justify-content: center;
          height: 100vh;
          margin: 0;
          background-color: #f0f0f0;
      }
      
      #container {
          text-align: center;
      }
      
      .facet-container {
          display:flex;
          justify-content: space-between;
          width: 800px;
          padding: 20px;
          background-color: #fff;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          border-radius: 8px;
      }
      
      .facet-list {
          list-style-type: none;
          margin: 0;
          padding: 0;
          background: #eee;
          padding: 5px;
          width: 300px;
          min-height: 1.5em;
          font-size: 0.85em;
          border: 1px solid #ddd;
          border-radius: 5px;
      }
      
      .facet-list li {
          margin: 5px;
          padding: 5px;
          font-size: 1.2em;
          width: 100%;
          border: 1px solid #bbb;
          background-color: #fafafa;
          cursor: move;
          border-radius: 5px;
      }
      
      .placeholder {
          height: 1.2em;
          border: 1px dashed #ccc;
          background-color: #f9f9f9;
          border-radius: 5px;
      }
      
      label {
          margin-bottom: 10px;
          display: block;
      }
      
      #course {
          /* width: 100%; */
          padding: 5px;
          border-radius: 5px;
          margin-bottom: 20px;
      }
      
      button {
          margin-top: 20px;
          padding: 10px;
          background-color: #4caf50;
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }
      
      .facet-card {
          flex: 1;
          margin-right: 20px;
      }
       </style>
       <div class='col-md-8 col-lg-8'>
        <div class="row">
        <div id="check" data-info='<?php echo $courses[0]['id'] ?>'></div>
        <label for="course"> Course:</label>
        <?php echo $courses[0]['name'] ?>
       

        <div class="facet-container" >
            <div class="facet-card">
                <label>Chapters</label>
                <ul id="allFacets" class="facet-list">
                    <?php foreach ($resultinfo as $row) { ?>
                        <li class="facet" value='<?php echo $row['id'] ?>'>
                            <?php echo $row['chapters'] ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="facet-card">
                <label>Assigned chapeters</label>
                <ul id="userFacets" class="facet-list">
                <?php foreach ($result1 as $row) { ?>
                        <li class="facet" value='<?php echo $row['id'] ?>'>
                            <?php echo $row['chapters'] ?>
                        </li>
                    <?php } ?>
                </ul>
                   <button id="assignButton">Update</button>
            </div>
        </div>
        </div>
        </div>

     
    </div>

    <script>
        $(function () {
            $("#allFacets, #userFacets").sortable({
                    connectWith: "ul",
                    placeholder: "placeholder",
                    delay: 150
                })
                .disableSelection()
                .dblclick(function (e) {
                    var item = e.target;
                    if (e.currentTarget.id === 'allFacets') {
                        $(item).fadeOut('fast', function () {
                            $(item).appendTo($('#userFacets')).fadeIn('slow');
                        });
                    } else {
                        $(item).fadeOut('fast', function () {
                            $(item).appendTo($('#allFacets')).fadeIn('slow');
                        });
                    }
                });

            $("#assignButton").on("click", function () {

                var checkElement = document.getElementById('check');
            
                var dataInfoValue = checkElement.getAttribute('data-info');
                    

                var ulList = document.getElementById('userFacets');
                var listItems = ulList.getElementsByTagName('li');
                var arr = []

                for (var i = 0; i < listItems.length; i++) {
                    var listItemValue = listItems[i].getAttribute('value');
                    arr.push(listItemValue)
                }
                var res = arr.join(',');
                $.ajax({
                    type: "POST",
                    url: "assignchaptersone",
                    data: {
                        course_id: dataInfoValue,
                        chapater_id: res,
                    },
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.error("Ajax request failed: ", error);
                    }
                });
            });
        });
    </script>
<?php $this->load->view('footer_message'); ?>



