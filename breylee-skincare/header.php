<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<style>
html { scroll-behavior:smooth; }
body { font-family:'Poppins',sans-serif; color:#1f2937; background:#F8FAFC; }
.bg-custom-gradient { background:linear-gradient(135deg,#E1F5FE 0%,#D4F2E7 50%,#FFFFFF 100%); }
.bg-teal-gradient { background:linear-gradient(135deg,#0B4F3A 0%,#065F46 100%); }
.animate-fadeIn { animation:fadeIn .2s ease-out forwards; }
@keyframes fadeIn { from {opacity:0;transform:scale(.97)} to {opacity:1;transform:scale(1)} }
.page-content.hidden { display:none; }
</style>
</head>
<body <?php body_class('font-sans antialiased min-h-screen flex flex-col'); ?>>
<?php wp_body_open(); ?>
