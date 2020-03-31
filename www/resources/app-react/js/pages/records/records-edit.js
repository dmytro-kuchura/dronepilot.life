import React from 'react';
import {connect} from 'react-redux';

class RecordsEdit extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            record: []
        };

        // props.dispatch(getRecordsList())
    }

    componentDidUpdate(prevProps) {
        // if (prevProps.recordsList !== this.props.recordsList) {
        //     this.setState({list: this.props.recordsList})
        // }
    }

    render() {
        return (
            <div id="layoutSidenav_content">
                <main>
                    <div className="container-fluid">
                        <h1 className="mt-4">Редактирование статьи</h1>
                        <div className="card mb-4">
                            <div className="card-body">
                                <div>Here is inner</div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        recordsList: state.Records.item
    }
};

export default connect(mapStateToProps)(RecordsEdit);
