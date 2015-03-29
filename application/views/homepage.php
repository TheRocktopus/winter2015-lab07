<div class="row">
    <h3>Barker Bob's Burger Bar - Orders</h3>
    <br/>
    <ul>
        {orders}
        <li><a href="welcome/order/{ordernum}">{ordernum} - {customer}</a></li>
        {/orders}
    </ul>
    <br/>
    Select an order from above to see the receipt!
</div>