import React, { useContext } from 'react';
import { DataContext } from '../contexts/dataContext';



function Footer() {
    const { contextData } = useContext(DataContext)

    return (
        <>
            <section className="footer-final">
                <footer className="text-center text-white" style={{ backgroundColor: "#0a4275" }}>
                    <div className="container p-4 pb-0">
                        <section className="">
                            <p className="d-flex justify-content-center align-items-center">
                                <span className="me-3">Total Pokemons: {contextData}</span>
                            </p>
                        </section>
                    </div>
                    <div className="text-center p-3" style={{ backgroundColor: "rgba(0, 0, 0, 0.2)" }}>
                        © 2022 Copyright: Bryan Lopez
                    </div>
                </footer>
            </section>
        </>
    );
}

export default Footer;
