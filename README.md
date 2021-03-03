# LOF MAGENTO TRAINING

Team: Landofcoder

Source: https://drive.google.com/drive/u/1/folders/1jLuJp_lJmRqVsO17uXKHwQa4hJJ-HvNk

The poet: @andyhoanghuu


**I. GIT**

Nội dung:
- GIT là gì? Tìm hiểu một số lệnh của GIT cơ bản nhất
- Tạo 1 tài khoản trên http://github.com/ và thực hành

Yêu cầu:
- Biết cách clone, pull, push, tạo pull request, tạo nhánh mới, tag version và một số thao tác cơ bản trong GIT
- Hiểu được quy trình làm việc với GIT

Ref:
- https://product.hubspot.com/blog/git-and-github-tutorial-for-beginners
- https://guides.github.com/introduction/git-handbook/

---
**II. PHP**

**Mảng**

Code:
Yêu cầu KHÔNG sử dụng những hàm array có sẵn của PHP

a. Cho các mảng sau:

```$a1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];```

```$a2 = ["a"=>"red","b"=>"green","c"=>"blue"];```


Output: Tìm các giá trị trùng nhau của 2 mảng.

b. Cho mảng sau:

```$age = ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];```

Output: Thay đổi các key trong mảng trên thành chữ in hoa.

Yêu cầu:
- Tìm hiểu các loại mảng trong PHP, cách xử lý mảng trong các vòng lặp
- Sau khi xử lý các bài tập trên, tham khảo thêm 1 số hàm array của PHP.




**API**

Code:
- Tìm kiếm 1 API thời tiết
- Viết 1 thư viện PHP đơn giản cho API trên
- Tạo 1 form, submit vị trí của 1 địa điểm và trả về kết quả là thời tiết (nắng, mưa, gió, nhiệt độ, ...) trong 1 khoảng hoặc mốc thời gian nào đó

Yêu cầu:
- Tìm hiểu cách submit 1 form của PHP theo các method cơ bản
- API là gì? Các cách kết nối đến 1 API? Tìm hiểu và triển khai 1 API đơn giản
- Tìm hiểu thêm về REST API và GraphQL (optional)



**CURL & Regex**

Code:
- Dùng CURL và Regex để lấy tiêu đề, nội dung, ngày tháng, ... của 1 bài báo bất kỳ (vnexpress.net, dantri.vn,..)
- In kết quả vừa tìm được bằng cấu trúc của 1 trang HTML cơ bản

Yêu cầu:
- Tìm hiểu CURL
- Tìm hiểu Regex (https://regex101.com/)



**Advanced (optional)**

Yêu cầu:
	- Namespace: https://www.php.net/manual/en/language.namespaces.basics.php
- PHP pattern: https://github.com/DesignPatternsPHP/DesignPatternsPHP
- PHP Code Sniff: https://viblo.asia/p/tim-hieu-cai-dat-va-su-dung-php-code-sniffer-Eb85ojgOl2G













**III. FRONT-END (JavaScript, jQuery, Ajax, HTML, CSS, ...)**

Code:
- Tạo 1 mảng dữ liệu FAQ (câu hỏi và câu trả lời)
- In ra nội dung 5 phần tử đầu tiên
- Khi click button "+", nội dung câu trả lời tương ứng với tiêu đề sẽ được sổ xuống
- Khi click "Load More", show ra 5 phần tử tiếp theo.

Yêu cầu:
- KHÔNG sử dụng các thư viện JavaScript khác ngoài jQuery
- Tìm hiểu các từ khóa về jQuery, AJAX, cách triển khai
- Validate nội dung trang vừa làm bằng công cụ: https://validator.w3.org/
- Cần biết cách debug và viết jQuery, Ajax ở mức cơ bản nhất
- Tìm hiểu về Knockout JS (optional)











**IV. DOCKER**

Yêu cầu:
- Tìm hiểu Docker là gì? Tại sao nên dùng Docker? Docker compose
- Tìm hiểu cách sử dụng Docker và một số lệnh cơ bản nhất



**V. MAGENTO**

**Tổng quan**

Nội dung:
- Tìm hiểu tổng quan về Magento 2. So sánh nó với các CMS (ví dụ WordPress) về đối tượng sử dụng, tại sao nên dùng Magento, điểm mạnh, điểm yếu,...
- Dựng 1 site Magento 2 trên máy bằng Docker: https://docs.google.com/document/d/1Z60s8rq5oNYqe796HHNK77Jz8Yd96CLfMM4g6L9Srbo/edit

- Tìm hiểu các tính năng chi tiết của Magento 2
Yêu cầu:
- Dựng 1 site Magento 2 (no sample data) trên localhost, xây dựng 1 web site và tìm hiểu tất cả tính năng có sẵn của Magento 2 (multi store, các loại sản phẩm, các cài đặt, ...)
- Tìm hiểu thêm về một số công nghệ có sẵn của bản Magento 2.4.x (Varnish, Rabbitmq, Elasticsearch,..) (optional)

**Try it!!!**

Source: https://drive.google.com/drive/u/1/folders/1KZCtPHVzhJ5noLlWAZBy7QDjgfaOrtUf

Yêu cầu:
- Tham khảo các tài liệu từ link trên theo thứ tự từ BASIC
- Hiểu được cách triển khai module, cách cài đặt, một số lệnh cơ bản
Bài tập:
1. Viết 1 module Lof_Weather với yêu cầu của bài tập PHP API.
Note: Lưu lại lịch sử những lần tìm kiếm của người dùng.

2. Viết 1 module Lof_BlogClone  với yêu cầu của bài tập PHP CURL & Regex.
- Viết tool cho phép nhập vào link của bài viết gốc, submit và clone bài viết đó trên Magento
- Hiển thị nội dung bài viết đó ở frontend với route: blog-clone/:blog_id

3. Viết 1 module Lof_Faq với yêu cầu của bài tập JS
- Lưu lại các câu hỏi và các câu trả lời
- Thiết lập một số setting cần thiết


**Good luck!**



