<!-- 2.모달 박스 UI 제작 => style.css 581번줄-->
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <!-- <span class="close" id="times">&times;</span>
      <p>Some text in the Modal..</p> -->
    <form action="/schedule/php/sp_rate_insert.php" class="rate-form" name="rate_form">


    </form>
    <div class="updateBtnBox">
      <button type="button" id="updateBtn">Update Rate</button>
    </div>
    <script>
    const updateBtn = document.querySelector('#updateBtn');
    //const modal = document.querySelector('#myModal');
    updateBtn.onclick = function() {
      document.rate_form.submit();
      modal.style.display = "none";
    }
    </script>
  </div>