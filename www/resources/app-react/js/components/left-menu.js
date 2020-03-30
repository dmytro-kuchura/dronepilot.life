import React from 'react';
import {Link} from 'react-router-dom';
import {connect} from "react-redux";

class LeftMenu extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            authUser: null
        };
    }

    componentDidUpdate(prevProps) {
        if (prevProps.authUser !== this.props.authUser) {
            this.setState({authUser: this.props.authUser})
        }
    }

    render() {
        return (
            <div id="layoutSidenav_nav">
                <nav className="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div className="sb-sidenav-menu">
                        <div className="nav">
                            <div className="sb-sidenav-menu-heading">Core</div>
                            <a className="nav-link" href="index.html">
                                <div className="sb-nav-link-icon">
                                    <i className="fas fa-tachometer-alt"></i>
                                </div>
                                Dashboard</a>
                            <div className="sb-sidenav-menu-heading">Interface</div>
                            <a className="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#collapseLayouts"
                               aria-expanded="false" aria-controls="collapseLayouts">
                                <div className="sb-nav-link-icon">
                                    <i className="fas fa-columns"></i>
                                </div>
                                Layouts
                                <div className="sb-sidenav-collapse-arrow">
                                    <i className="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div className="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordion">
                                <nav className="sb-sidenav-menu-nested nav">
                                    <a className="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a className="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a className="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#collapsePages"
                               aria-expanded="false" aria-controls="collapsePages">
                                <div className="sb-nav-link-icon"><i className="fas fa-book-open"></i></div>
                                Pages
                                <div className="sb-sidenav-collapse-arrow">
                                    <i className="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div className="collapse" id="collapsePages" aria-labelledby="headingTwo"
                                 data-parent="#sidenavAccordion">
                                <nav className="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a className="nav-link collapsed" href="#" data-toggle="collapse"
                                       data-target="#pagesCollapseAuth" aria-expanded="false"
                                       aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div className="sb-sidenav-collapse-arrow">
                                            <i className="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div className="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                         data-parent="#sidenavAccordionPages">
                                        <nav className="sb-sidenav-menu-nested nav">
                                            <a className="nav-link" href="login.html">Login</a>
                                            <a className="nav-link" href="register.html">Register</a>
                                            <a className="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a className="nav-link collapsed" href="#" data-toggle="collapse"
                                       data-target="#pagesCollapseError" aria-expanded="false"
                                       aria-controls="pagesCollapseError"
                                    >Error
                                        <div className="sb-sidenav-collapse-arrow">
                                            <i className="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div className="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                         data-parent="#sidenavAccordionPages">
                                        <nav className="sb-sidenav-menu-nested nav">
                                            <a className="nav-link" href="401.html">401 Page</a>
                                            <a className="nav-link" href="404.html">404 Page</a>
                                            <a className="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <div className="sb-sidenav-menu-heading">Addons</div>
                            <Link to="/admin/charts" className="nav-link">
                                <div className="sb-nav-link-icon">
                                    <i className="fas fa-chart-area"></i>
                                </div>
                                Charts</Link>
                            <a className="nav-link" href="tables.html">
                            <div className="sb-nav-link-icon">
                                <i className="fas fa-table"></i>
                            </div>
                            Tables</a>
                        </div>
                    </div>

                    {this.state.authUser ? <div className="sb-sidenav-footer">
                        <div className="small">Logged in as:</div>
                        {this.state.authUser.name}
                    </div> : null}
                </nav>
            </div>
        )
    };
}

const mapStateToProps = (state) => {
    return {
        authUser: state.Auth.user
    }
};

export default connect(mapStateToProps)(LeftMenu);
