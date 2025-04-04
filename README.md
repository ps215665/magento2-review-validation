# Magento 2 Review Nickname Validation (No Dashes Allowed)

This Magento 2 module (`Ps_Review`) adds a validation layer to the product review form, ensuring that nicknames containing **dashes (`-`) are not allowed** during review submission.

## Features
- Validates the **nickname** field on the review form.
- Prevents review submission if the nickname contains **dashes**.
- Enhances data quality and enforces cleaner input.
- Lightweight and compatible with Magento 2 standards.

## Installation

### 1. Clone or Download the Module
```sh
git clone https://github.com/ps215665/magento2-review-validation.git app/code/Ps/Review
```

### 2. Enable the Module
```sh
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:flush
```

## Compatibility
- Magento 2.4+
