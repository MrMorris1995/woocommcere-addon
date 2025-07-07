
# WooCommerce Addon Plugin

This WooCommerce Addon automatically adds a **colon (`:`)** after each product attribute name on the single product page in the "Additional Information" section.

It demonstrates **two independent solutions**:
1. **Backend Solution (PHP):** Adds a colon server-side using a WooCommerce filter.
2. **Frontend Solution (JavaScript):** Adds a colon client-side when the page loads.

➡ If both solutions are active, the result will be **two colons (`::`)**, showing that both solutions work independently.

---

## ✅ Features

- Adds a colon (`:`) after each attribute label
- Works in the **“Additional Information”** section of WooCommerce product pages
- Demonstrates both a **PHP filter hook** and a **JavaScript DOM manipulation**
- Minimal, clean code structure

---

## 🔧 Installation

1. Copy the plugin folder to:  
   `wp-content/plugins/woocommerce-addon/`

2. Folder structure should look like this:

```
woocommerce-addon/
├── woocommerce-addon.php
└── js/
    └── woocommerce-addon.js
```

3. Activate the plugin in the WordPress admin panel (**Plugins → Installed Plugins**).

---

## ⚙️ How it works

### Backend (PHP) solution:
- Uses the WooCommerce filter `woocommerce_display_product_attributes`
- Adds a colon directly to the attribute label when WooCommerce renders the page.

### Frontend (JavaScript) solution:
- Uses plain JavaScript (`DOMContentLoaded` event).
- Looks for each attribute label in the HTML and appends a colon if missing.

---

## 🔍 Example Output

If both solutions are active, the output will look like this:

```
Color:: Blue
Size:: Large
```

---

## 📂 Plugin File Overview

```
woocommerce-addon/
├── woocommerce-addon.php           # Main plugin file (PHP logic)
└── js/
    └── woocommerce-addon.js        # Frontend JavaScript logic
```

---

## 💡 Notes

- This is a simple example and can be extended to other WooCommerce fields.
- You can disable either the PHP or JS part if you only want one colon.
- The JavaScript runs only on **single product pages**.

---

## License

MIT License (or adjust as needed).
