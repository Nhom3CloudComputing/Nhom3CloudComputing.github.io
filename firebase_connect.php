
<?php
class firebaseRDB{
   function __construct($url=null) {
      if(isset($url)){
         $this->url = $url;
      }else{
         throw new Exception("Database URL must be specified");
      }
   }

   public function grab($url, $method, $par=null){
      // khởi tạo  curl
      $ch = curl_init();
      // thiết lập curl
      curl_setopt($ch, CURLOPT_URL, $url);
      // Thiết lập để trả về dữ liệu dưới dạng chuỗi thay vì in ra nó trực tiếp.
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      // kiểm tra ếu có tham số được cung cấp, thiết lập chúng là dữ liệu được gửi đi.
      if(isset($par)){
         curl_setopt($ch, CURLOPT_POSTFIELDS, $par);
      }
      // Thiết lập phương thức yêu cầu HTTP.
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
      // Vô hiệu hóa xác minh chứng chỉ SSL.
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      // Cho phép cURL tự động chuyển hướng.
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      // Thiết lập thời gian chờ cho yêu cầu.
      curl_setopt($ch, CURLOPT_TIMEOUT, 120);
      // Tắt việc bao gồm phần header trong kết quả.
      curl_setopt($ch, CURLOPT_HEADER, 0);
      // Thực hiện yêu cầu và lưu trữ nội dung trả về vào biến $html.
      $html = curl_exec($ch);
      // Trả về nội dung của trang web được yêu cầu.
      return $html;
      // Đóng phiên làm việc cURL.
      curl_close($ch);
   }


   public function insert($table, $data){
      $path = $this->url."/$table.json";
      $grab = $this->grab($path, "POST", json_encode($data));
      return $grab;
   }

   public function update($table, $uniqueID, $data){
      $path = $this->url."/$table/$uniqueID.json";
      $grab = $this->grab($path, "PATCH", json_encode($data));
      return $grab;
   }

   public function delete($table, $uniqueID){
      $path = $this->url."/$table/$uniqueID.json";
      $grab = $this->grab($path, "DELETE");
      return $grab;
   }

   public function retrieve($dbPath, $queryKey=null, $queryType=null, $queryVal =null){
      if(isset($queryType) && isset($queryKey) && isset($queryVal)){
         $queryVal = urlencode($queryVal);
         if($queryType == "EQUAL"){
               $pars = "orderBy=\"$queryKey\"&equalTo=\"$queryVal\"";
         }elseif($queryType == "LIKE"){
               $pars = "orderBy=\"$queryKey\"&startAt=\"$queryVal\"";
         }
      }
      $pars = isset($pars) ? "?$pars" : "";
      $path = $this->url."/$dbPath.json$pars";
      $grab = $this->grab($path, "GET");
      return $grab;
   }
}