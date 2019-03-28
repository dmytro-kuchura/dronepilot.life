import React from "react";

import {Container, Nav, NavItem, NavLink} from "reactstrap";

class Footer extends React.Component {
    render() {
        return (
            <footer className="footer">
                <Container fluid>
                    <Nav>
                        <NavItem>
                            <NavLink href="/">Главная</NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink href="/about">Обо мне</NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink href="/blog">Блог</NavLink>
                        </NavItem>
                    </Nav>
                    <div className="copyright">
                        © {new Date().getFullYear()} made with{" "}
                        <i className="tim-icons icon-heart-2"/> by{" "}
                        <a
                            href="javascript:void(0)"
                            rel="noopener noreferrer"
                            target="_blank"
                        >
                            Dmitry Kuchura
                        </a>{" "}
                    </div>
                </Container>
            </footer>
        );
    }
}

export default Footer;
