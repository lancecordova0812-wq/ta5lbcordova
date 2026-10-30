<?php
// InfinityFree/shared-host fallback entry point. The regular Laravel entry point is public/index.php.
require __DIR__ . '/app/Http/Controllers/Controller.php';
require __DIR__ . '/app/Http/Controllers/PageController.php';
require __DIR__ . '/app/Http/Controllers/CustomerController.php';
require __DIR__ . '/app/Http/Controllers/UserController.php';

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
if ($base !== '' && $base !== '/' && str_starts_with($path, $base)) $path = substr($path, strlen($base)) ?: '/';
$path = '/' . trim($path, '/');

$page = match ($path) {
    '/' => (new PageController())->home(),
    '/about' => (new PageController())->about(),
    '/customers' => (new CustomerController())->index(),
    '/users' => (new UserController())->index(),
    default => null,
};
if ($page === null) { http_response_code(404); $page = ['view' => '404', 'data' => ['title' => 'Page Not Found']]; }
$data = $page['data']; $title = $data['title'];
$esc = static fn($v) => htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
$baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$url = static fn($p) => ($baseUrl === '' || $baseUrl === '/') ? $p : $baseUrl . $p;
?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title><?= $esc($title) ?></title>
<style>:root{--navy:#5b111b;--blue:#9b1c31;--light:#fff7f8;--ink:#2b2022;--muted:#765d62}*{box-sizing:border-box}body{margin:0;font-family:Arial,sans-serif;color:var(--ink);background:var(--light)}nav{background:var(--navy);padding:16px max(20px,calc((100% - 1100px)/2));display:flex;align-items:center;gap:22px;flex-wrap:wrap}nav .brand{color:#fff;font-weight:700;margin-right:auto;text-decoration:none}nav a{color:#ffe3e7;text-decoration:none}main{max-width:1100px;margin:0 auto;padding:52px 20px}h1{font-size:clamp(2rem,4vw,3.2rem);margin:0 0 14px;color:var(--navy)}p{line-height:1.65}.lead{font-size:1.15rem;color:var(--muted);max-width:720px}.hero,.card{background:#fff;border-radius:14px;padding:32px;box-shadow:0 8px 24px #5b111b14}.buttons{display:flex;gap:12px;flex-wrap:wrap;margin-top:26px}.button{display:inline-block;background:var(--blue);color:#fff;padding:12px 18px;border-radius:8px;text-decoration:none;font-weight:700}.button.secondary{background:#f7e6e9;color:var(--navy)}.table-wrap{overflow-x:auto;background:#fff;border-radius:12px;box-shadow:0 8px 24px #5b111b14}table{border-collapse:collapse;width:100%;min-width:620px}th,td{padding:16px 18px;text-align:left;border-bottom:1px solid #ead9dc}th{background:#fbecef;color:var(--navy)}tr:last-child td{border-bottom:0}.tag{display:inline-block;background:#f4e3e6;color:#7b1e2b;padding:5px 10px;border-radius:99px;font-size:.85rem}footer{text-align:center;padding:28px 20px;color:var(--muted);font-size:.9rem}</style></head><body>
<nav><a class="brand" href="<?= $esc($url('/')) ?>">Laravel POS Foundations</a><a href="<?= $esc($url('/')) ?>">Home</a><a href="<?= $esc($url('/about')) ?>">About</a><a href="<?= $esc($url('/customers')) ?>">Customers</a><a href="<?= $esc($url('/users')) ?>">Users</a></nav><main>
<?php if ($page['view'] === 'home'): ?><section class="hero"><h1>Welcome to Laravel POS Foundations</h1><p class="lead">A four-page point-of-sale foundation built with Laravel routing, controllers, static PHP arrays, and Blade views.</p><div class="buttons"><a class="button" href="<?= $esc($url('/customers')) ?>">View Customers</a><a class="button secondary" href="<?= $esc($url('/users')) ?>">View Users</a></div></section>
<?php elseif ($page['view'] === 'about'): ?><section class="card"><h1>About This Application</h1><p>This activity demonstrates Laravel's MVC architecture. Routes map URLs to controller methods, controllers prepare data, and Blade views render the response.</p><p>The customer and user pages currently use static PHP arrays as temporary data sources, as required by TFA5.</p><div class="buttons"><a class="button" href="<?= $esc($url('/customers')) ?>">Customer Accounts</a><a class="button secondary" href="<?= $esc($url('/users')) ?>">User Accounts</a></div></section>
<?php elseif ($page['view'] === 'customers'): ?><h1>Customer Accounts</h1><p class="lead">Sample customer records supplied by <code>CustomerController</code>.</p><div class="table-wrap"><table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Status</th></tr></thead><tbody><?php foreach ($data['customers'] as $customer): ?><tr><td><?= $esc($customer['id']) ?></td><td><?= $esc($customer['name']) ?></td><td><?= $esc($customer['email']) ?></td><td><?= $esc($customer['phone']) ?></td><td><span class="tag">Active</span></td></tr><?php endforeach; ?></tbody></table></div>
<?php elseif ($page['view'] === 'users'): ?><h1>User Accounts</h1><p class="lead">Sample system-user records supplied by <code>UserController</code>.</p><div class="table-wrap"><table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Status</th></tr></thead><tbody><?php foreach ($data['users'] as $user): ?><tr><td><?= $esc($user['id']) ?></td><td><?= $esc($user['name']) ?></td><td><?= $esc($user['email']) ?></td><td><?= $esc($user['role']) ?></td><td><span class="tag">Active</span></td></tr><?php endforeach; ?></tbody></table></div>
<?php else: ?><section class="card"><h1>Page Not Found</h1><p>The requested page does not exist.</p><a class="button" href="<?= $esc($url('/')) ?>">Return Home</a></section><?php endif; ?></main><footer>IT0049 Web System Technologies &middot; TFA5</footer></body></html>
