import React from 'react';
import {connect} from 'react-redux';
import Pagination from '../../helpers/pagination';
import {formatDate} from '../../helpers/date-format';
import {getRecordsList} from '../../services/records-service';
import {Link} from 'react-router-dom';

class RecordsList extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            list: []
        };

        props.dispatch(getRecordsList())
    }

    componentDidUpdate(prevProps) {
        if (prevProps.recordsList !== this.props.recordsList) {
            this.setState({list: this.props.recordsList})
        }
    }

    render() {
        return (
            <div id="layoutSidenav_content">
                <main>
                    <div className="container-fluid">
                        <h1 className="mt-4">Список статей</h1>
                        <div className="card mb-4">
                            <div className="card-body">
                                <div className="table-responsive">
                                    <table className="table table-bordered" id="dataTable" width="100%" cellSpacing="0">
                                        <thead>
                                        <tr>
                                            <th>Название</th>
                                            <th>Просмотров</th>
                                            <th>Статус</th>
                                            <th>Дата создания</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Название</th>
                                            <th>Просмотров</th>
                                            <th>Статус</th>
                                            <th>Дата создания</th>
                                            <th>Действия</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        <List state={this.state.list}/>

                                        </tbody>
                                    </table>
                                </div>

                                <Pagination/>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        );
    }
}

const List = (props) => {
    let list = props.state;
    let html;

    if (list.length > 0) {
        html = list.map(function (item) {
            return (
                <tr key={item.id}>
                    <td>{item.name}</td>
                    <td>{item.views}</td>
                    <td>{item.status}</td>
                    <td>{formatDate(item.created_at)}</td>
                    <td>
                        <Link to={'/admin/records/' + item.id} className="btn btn-success btn-sm">
                            <i className="fas fa-edit"></i>
                        </Link>

                        <span> </span>

                        <Link to={'/admin/records/view/' + item.id} className="btn btn-warning btn-sm">
                            <i className="fas fa-eye"></i>
                        </Link>

                        <span> </span>

                        <Link to={'/admin/records/delete/' + item.id} className="btn btn-danger btn-sm">
                            <i className="fas fa-trash"></i>
                        </Link>
                    </td>
                </tr>
            )
        });

        return html;
    }

    return (
        <tr>
            <td>Nothing to show!</td>
        </tr>
    )
};

const mapStateToProps = (state) => {
    return {
        authUser: state.Auth.user,
        recordsList: state.Records.list
    }
};

export default connect(mapStateToProps)(RecordsList);
