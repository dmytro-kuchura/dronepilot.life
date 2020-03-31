import React from "react";
import {connect} from "react-redux";

class Pagination extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            currentPage: 1,
            maxPage: 3,
            atPage: 4,
            total: 8,
        };
    }

    componentDidUpdate(prevProps) {
        console.log(this.props);
    }

    render() {
        return (
            <div className="row">
                <div className="col-md-5">
                    <div className="dataTables_info" id="dataTable_info" role="status"
                         aria-live="polite">Показано от 1 до 10 из 57 записей
                    </div>
                </div>
                <div className="col-md-7">
                    <div className="dataTables_paginate paging_simple_numbers text-right" style={{float: 'right'}}>
                        <ul className="pagination">
                            <li className="paginate_button page-item previous disabled"
                                id="dataTable_previous">
                                <a href="#" aria-controls="dataTable"
                                   data-dt-idx="0" tabIndex="0"
                                   className="page-link">«</a>
                            </li>
                            <li className="paginate_button page-item active">
                                <a href="#"
                                   aria-controls="dataTable"
                                   data-dt-idx="1"
                                   tabIndex="0"
                                   className="page-link">1</a>
                            </li>
                            <li className="paginate_button page-item ">
                                <a href="#"
                                   aria-controls="dataTable"
                                   data-dt-idx="2"
                                   tabIndex="0"
                                   className="page-link">2</a>
                            </li>
                            <li className="paginate_button page-item ">
                                <a href="#"
                                   aria-controls="dataTable"
                                   data-dt-idx="3"
                                   tabIndex="0"
                                   className="page-link">3</a>
                            </li>
                            <li className="paginate_button page-item ">
                                <a href="#"
                                   aria-controls="dataTable"
                                   data-dt-idx="4"
                                   tabIndex="0"
                                   className="page-link">4</a>
                            </li>
                            <li className="paginate_button page-item ">
                                <a href="#"
                                   aria-controls="dataTable"
                                   data-dt-idx="5"
                                   tabIndex="0"
                                   className="page-link">5</a>
                            </li>
                            <li className="paginate_button page-item ">
                                <a href="#"
                                   aria-controls="dataTable"
                                   data-dt-idx="6"
                                   tabIndex="0"
                                   className="page-link">6</a>
                            </li>
                            <li className="paginate_button page-item next" id="dataTable_next">
                                <a href="#" aria-controls="dataTable" data-dt-idx="7"
                                   tabIndex="0" className="page-link">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {}
};

export default connect(mapStateToProps)(Pagination);
