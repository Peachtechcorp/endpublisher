// resources/js/components/HelloReact.js

import React, { useEffect, useRef, useState } from 'react';
import ReactDOM from 'react-dom';
import * as styles from './index.module.scss';

export default function Cart(props) {
    // PROPS
    const { cart } = props;

    // STATE
    const [items, setItems] = useState([]);

    // effect
    useEffect(() => {
        setItems(Object.keys(cart).map(i => cart[i]));
    }, [cart]);

    // handlers
    const handleQuantity = (index, value) => {
        console.log(index, value);
        setItems(prevState => {
            return prevState.map((item, i) => {
                if (i == index) {
                    return { ...item, quantity: value };
                }
                return item;
            })
        })
    }

    // const handleQuantity = (e) => {
    //     console.log(e);
    // }

    return (
        <div>
            <div class="row">
                <div class="col-12 table-responsive mb-xl-22 mb-lg-20 mb-md-16 mb-10"></div>
                <table className="table cartTable">
                    <thead>
                        <tr>
                            <th scope="col" className="text-uppercase fwEbold border-top-0">product</th>
                            <th scope="col" className="text-uppercase fwEbold border-top-0">price</th>
                            <th scope="col" className="text-uppercase fwEbold border-top-0">quantity</th>
                            <th scope="col" className="text-uppercase fwEbold border-top-0">total</th>
                        </tr>
                    </thead>
                    <tbody>
                        {items.map((item, i) => {
                            return (
                                <tr className="align-items-center">
                                    <td className="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
                                        <div className="imgHolder">
                                            <img src={item.image} alt="image description" className="img-fluid" />
                                        </div>
                                        <span className="title pl-2"><a href="shop-detail.html">{item.name}</a></span>
                                    </td>
                                    <td className="fwEbold border-top-0 border-bottom px-0 py-6">{item.price} TZS</td>
                                    <td className="border-top-0 border-bottom px-0 py-6">
                                        <InputQuantity quantity={item.quantity} onChangeQuantity={(v) => handleQuantity(i, v)} />
                                    </td>
                                    <td className="fwEbold border-top-0 border-bottom px-0 py-6">{item.price * item.quantity} TZS</td>

                                    <td><span className="fas fa-times float-right"></span></td>

                                    <input type="hidden" name={`order_items[${i}][name]`} value={item.name} />
                                    <input type="hidden" name={`order_items[${i}][price]`} value={item.price} />
                                    <input type="hidden" name={`order_items[${i}][quantity]`} value={item.quantity} />
                                    <input type="hidden" name={`order_items[${i}][book_id]`} value={item.book_id} />

                                </tr>
                            )
                        })}

                        <input type="hidden" name="total_amount" value={items.reduce((carry, item) => carry + (parseFloat(item.quantity) * parseFloat(item.price)), 0)} />
                    </tbody>
                </table>
            </div>

            <div class="row">


                <div class="col-12 col-md-6">
                    <div class="d-flex justify-content-between">
                        <strong class="txt fwEbold text-uppercase mb-1">subtotal</strong>
                        <strong class="price fwEbold text-uppercase mb-1">{items.reduce((carry, item) => carry + (parseFloat(item.quantity) * parseFloat(item.price)), 0)} TZS</strong>
                    </div>
                </div>
            </div>
        </div>
    )
}

export const InputQuantity = (props) => {
    // props
    const { quantity, onChangeQuantity } = props;

    // state
    const [count, setCount] = useState(quantity);

    // effects
    useEffect(() => {
        onChangeQuantity(count);
    }, [count])

    // handlers
    const handleDecrement = () => {
        if (!(count > 0)) return;
        setCount(count - 1);
    }

    const handleIncrement = () => {
        setCount(count + 1);
    }

    return (
        <div className={styles.spinner}>
            <span className={styles.dec} onClick={handleDecrement}>-</span>
            <span className={styles.count}>{count}</span>
            <span className={styles.inc} onClick={handleIncrement}>+</span>
        </div>
    );
}

if (document.getElementById('cart')) {
    // find element by id
    const element = document.getElementById('cart');

    // create new props from component data attributes
    // result {cart: [{}]}
    const props = {}
    const _props = Object.assign({}, element.dataset);
    props.cart = JSON.parse(_props.cart);


    ReactDOM.render(<Cart {...props} />, element);
}
