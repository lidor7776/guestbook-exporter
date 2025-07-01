# Guestbook Exporter (PHP)

📬 A simple PHP-based guestbook system that allows users to submit messages, stores them in a text file, and exports them to a downloadable CSV file compatible with Excel (including UTF-8 Hebrew support).

## 🛠️ Technologies Used

- PHP
- HTML
- Regex for data extraction
- File operations (`fopen`, `fputcsv`, `readfile`)
- CSV export with proper encoding headers

## 🚀 Features

- Submit messages with name and content
- Messages are saved to `messages.txt`
- Display all messages in a clean view (`messages.php`)
- Export messages as a `.csv` file via `export.php`
- Supports Hebrew and special characters in CSV (UTF-8 with BOM)

## 📁 File Structure
guestbook-exporter/
-
├── index.php         
├── messages.php      
├── export.php         
├── submit.php         
├── messages.txt       
├── style.css         
├── README.md          
